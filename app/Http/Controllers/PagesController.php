<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Slide;
use App\Category;
use App\Product;
use App\TypeProduct;
use App\ImageProduct;
use App\ReviewProduct;
use App\Cart;
use App\User;
use App\Bill;
use App\BillDetail;
use App\category_new;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use App\Events\RedisEvent;
use App\Messages;
use App\news;
use App\Setting;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function getIndex()
    {
        $user = auth()->user();
        $slides = Slide::all();
        $newProduct = DB::table('product as p')
            ->select(
                'p.id',
                'p.name',
                'p.slug',
                'p.id_type',
                'p.description',
                'p.detail',
                'p.unit_price',
                'p.quantity',
                'p.hot',
                'p.rating',
                'p.promotion_price',
                'p.created_at'
            )
            ->orderBy('created_at', 'DESC')->get()->take(8);

        $goodPriceProduct = DB::table('product as p')
            ->select(
                'p.id',
                'p.name',
                'p.slug',
                'p.id_type',
                'p.description',
                'p.detail',
                'p.unit_price',
                'p.quantity',
                'p.hot',
                'p.rating',
                'p.promotion_price',
                'p.created_at'
            )
            ->orderBy('p.unit_price', 'ASC')->get()->take(4);

        $sellingProduct = DB::table('product as p')
            ->select(
                'p.id',
                'p.name',
                'p.slug',
                'p.id_type',
                'p.description',
                'p.detail',
                'p.unit_price',
                'p.quantity',
                'p.hot',
                'p.rating',
                'p.promotion_price',
                'p.quantity_sold',
                'p.created_at'
            )
            ->orderBy('p.quantity_sold', 'DESC')->get()->take(4);

        // DB::enableQueryLog();
        // $sellingProduct = DB::select('select p  ');
        // dd(DB::getQueryLog());

        return view('pages.index', compact('slides', 'newProduct', 'goodPriceProduct', 'sellingProduct', 'user'));
    }

    public function getAbout()
    {
        $user = auth()->user();
        $gioiThieu = DB::table('settings')->get();
        return view('pages.about', compact('gioiThieu', 'user'));
    }

    public function getContact()
    {
        $user = auth()->user();
        $lienHe = DB::table('settings')->get();
        return view('pages.contact', compact('lienHe', 'user'));
    }

    public function getNew(Request $request)
    {
        $user = auth()->user();
        $categoryNews = DB::table('category_news')
            ->where('status', 1)
            ->get();
        $new = DB::table('news')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();
        return view('pages.new', compact('new', 'user', 'categoryNews'));
    }

    public function getNewSecond(Request $request, $id)
    {
        $user = auth()->user();
        $categoryNews = DB::table('category_news')
            ->where('status', 1)
            ->get();
        $new = news::where('id_category_new', $id)->get();
        return view('pages.newsecond', compact('new', 'user', 'categoryNews'));
    }

    public function getDetailNew(Request $request, $id)
    {
        $user = auth()->user();
        $categoryNews = DB::table('category_news')
            ->where('status', 1)
            ->get();

        $detailNew = DB::select('select id, id_category_new, title, info, content, image, created_at,date(CURDATE()) - date(created_at) as date from news
        where id= '.$id.'');
        // dd($detailNew);
        return view('pages.chi-tiet-tin-tuc', compact('detailNew', 'user', 'categoryNews'));
    }

    public function getDelivery()
    {
        $user = auth()->user();
        return view('pages.delivery', compact('user'));
    }

    public function getDonhang($id)
    {
        $user = auth()->user();
        $donHang = DB::table('bill_detail as bd')
            ->join('bill as b', 'bd.id_bill', '=', 'b.id')
            ->where('b.id_users', $id)
            ->select('b.total', 'b.shipping', 'b.payment', 'b.status', 'b.created_at', 'bd.id_product', 'bd.unit_price', 'bd.promotion_price', 'b.id_users', 'bd.quantity')
            ->get();
        return view('pages.donhang', compact('user', 'donHang'));
    }

    public function getFaq()
    {
        $user = auth()->user();
        return view('pages.faq', compact('user'));
    }

    public function getCategory(Request $request)
    {
        $user = auth()->user();
        $min = 0;
        $max = 200000000;
        $sort = 'latest';
        $show = 9;

        $category = Category::where('slug', $request->slugCategory)->get()->take(1);
        $category = $category[0];

        $typeProduct = TypeProduct::where('id_category', $category['id'])->get();
        // dd($typeProduct);

        $idType = collect([]);
        foreach ($typeProduct as $item) {
            $idType->push($item->id);
        }

        if (isset($request->min)) {
            $min = $request->min;
        }
        if (isset($request->max)) {
            $max = $request->max;
        }
        if (isset($request->sort)) {
            $sort = $request->sort;
        }
        if (isset($request->show)) {
            $show = $request->show;
        }

        DB::enableQueryLog();

        switch ($sort) {
            case 'latest':
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('id', 'DESC')->paginate($show);
                break;
            case 'oldest':
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('id', 'ASC')->paginate($show);
                break;

            case 'price_asc':
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('unit_price', 'ASC')->paginate($show);
                break;

            case 'price_desc':
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('unit_price', 'DESC')->paginate($show);
                break;

            case 'rating':
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('rating', 'DESC')->paginate($show);
                break;

            case 'selling':
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('quantity_sold', 'DESC')->paginate($show);
                break;

            default:
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('id', 'DESC')->paginate($show);
                break;
        }

        return view('pages.category', compact('category', 'products', 'min', 'max', 'sort', 'show', 'user'));
    }


    public function getAllProduct(Request $request)
    {
        $user = auth()->user();
        $min = 0;
        $max = 200000000;
        $sort = 'latest';
        $show = 9;

        if (isset($request->min)) {
            $min = $request->min;
        }
        if (isset($request->max)) {
            $max = $request->max;
        }
        if (isset($request->sort)) {
            $sort = $request->sort;
        }
        if (isset($request->show)) {
            $show = $request->show;
        }

        switch ($sort) {
            case 'latest':
                $products = Product::where(function ($query) use ($min, $max) {
                    $query->whereBetween('unit_price', [$min, $max])
                        ->orWhere(function ($query) use ($min, $max) {
                            $query->whereBetween('promotion_price', [$min, $max]);
                        });
                })
                    ->orderBy('id', 'DESC')->paginate($show);
                break;
            case 'oldest':
                $products = Product::where(function ($query) use ($min, $max) {
                    $query->whereBetween('unit_price', [$min, $max])
                        ->orWhere(function ($query) use ($min, $max) {
                            $query->whereBetween('promotion_price', [$min, $max]);
                        });
                })
                    ->orderBy('id', 'ASC')->paginate($show);
                break;

            case 'price_asc':
                $products = Product::where(function ($query) use ($min, $max) {
                    $query->whereBetween('unit_price', [$min, $max])
                        ->orWhere(function ($query) use ($min, $max) {
                            $query->whereBetween('promotion_price', [$min, $max]);
                        });
                })
                    ->orderBy('unit_price', 'ASC')->paginate($show);
                break;

            case 'price_desc':
                $products = Product::where(function ($query) use ($min, $max) {
                    $query->whereBetween('unit_price', [$min, $max])
                        ->orWhere(function ($query) use ($min, $max) {
                            $query->whereBetween('promotion_price', [$min, $max]);
                        });
                })
                    ->orderBy('unit_price', 'DESC')->paginate($show);
                break;

            case 'rating':
                $products = Product::where(function ($query) use ($min, $max) {
                    $query->whereBetween('unit_price', [$min, $max])
                        ->orWhere(function ($query) use ($min, $max) {
                            $query->whereBetween('promotion_price', [$min, $max]);
                        });
                })
                    ->orderBy('rating', 'DESC')->paginate($show);
                break;

            case 'selling':
                $products = Product::where(function ($query) use ($min, $max) {
                    $query->whereBetween('unit_price', [$min, $max])
                        ->orWhere(function ($query) use ($min, $max) {
                            $query->whereBetween('promotion_price', [$min, $max]);
                        });
                })
                    ->orderBy('quantity_sold', 'DESC')->paginate($show);
                break;

            default:
                $products = Product::where(function ($query) use ($min, $max) {
                    $query->whereBetween('unit_price', [$min, $max])
                        ->orWhere(function ($query) use ($min, $max) {
                            $query->whereBetween('promotion_price', [$min, $max]);
                        });
                })
                    ->orderBy('id', 'DESC')->paginate($show);
                break;
        }
        return view('pages.allProduct', compact('products', 'min', 'max', 'sort', 'show', 'user'));
    }

    public function getTypeProduct(Request $request)
    {
        $user = auth()->user();
        $min = 0;
        $max = 200000000;
        $sort = 'latest';
        $show = 9;

        $category = Category::where('slug', $request->slugCategory)->get()->take(1);
        $category = $category[0];
        $typeProduct = TypeProduct::where('slug', $request->slugTypeProduct)->get()->take(1);

        // dd($typeProduct);
        $typeProduct = $typeProduct[0];

        if (isset($request->min)) {
            $min = $request->min;
        }
        if (isset($request->max)) {
            $max = $request->max;
        }
        if (isset($request->sort)) {
            $sort = $request->sort;
        }
        if (isset($request->show)) {
            $show = $request->show;
        }

        // SELECT * FROM product
        // WHERE id_type = id AND (unit_price BETWEEN min AND max OR promotion_price BETWEEN min AND max)
        switch ($sort) {
            case 'latest':
                $products = Product::where('id_type', $typeProduct['id'])
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('id', 'DESC')->paginate($show);
                break;
            case 'oldest':
                $products = Product::where('id_type', $typeProduct['id'])
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('id', 'ASC')->paginate($show);
                break;

            case 'price_asc':
                $products = Product::where('id_type', $typeProduct['id'])
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('unit_price', 'ASC')->paginate($show);
                break;

            case 'price_desc':
                $products = Product::where('id_type', $typeProduct['id'])
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('unit_price', 'DESC')->paginate($show);
                break;

            case 'rating':
                $products = Product::where('id_type', $typeProduct['id'])
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('rating', 'DESC')->paginate($show);
                break;

            case 'selling':
                $products = Product::where('id_type', $typeProduct['id'])
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('quantity_sold', 'DESC')->paginate($show);
                break;

            default:
                $products = Product::where('id_type', $typeProduct['id'])
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->orderBy('id', 'DESC')->paginate($show);
                break;
        }

        return view('pages.typeProduct', compact('category', 'typeProduct', 'products', 'min', 'max', 'sort', 'show', 'user'));
    }

    public function getProduct($slugProduct)
    {
        $user = auth()->user();
        $product = Product::where('slug', $slugProduct)->get()->take(1);
        $product = $product[0];
        $relatestProduct = Product::where('id_type', $product->id_type)->where('id', '!=', $product->id)->get()->take(4);
        $imageProduct = ImageProduct::where('id_product', $product->id)->get();
        $reviewProduct = ReviewProduct::where('id_product', $product->id)->paginate(3);
        // dd($slugProduct);
        return view('pages.product', compact('product', 'relatestProduct', 'imageProduct', 'reviewProduct', 'user'));
    }

    public function postAddReview(Request $request)
    {
        $review = new ReviewProduct;

        $review->name = $request->txtName;
        $review->email = $request->txtEmail;
        $review->content = $request->txtReview;
        $review->rating = $request->rdoRating;
        $review->id_product = $request->id;
        $review->save();

        return redirect()->back()->with('success', '????nh gi?? c???a b???n ???? ???????c th??m th??nh c??ng.');
    }

    public function postAddTocart($id, Request $request)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : NULL;
        $cart = new Cart($oldCart);
        $post = $request->all();
        if ($product->quantity <= ($post['qty'])) {
            return redirect()->back()->with('error', 'Kh??ng c??n ????? h??ng trong kho, s??? l?????ng c??n l???i: ' . $product->quantity . '.');
        } else {
            $cart->add($product, $id, $post['qty']);
            $request->session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Th??m th??nh c??ng s???n ph???m v??o gi??? h??ng.');
        }
    }

    public function getAddToCart(Request $request, $id, $qty)
    {
        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : NULL;
        $cart = new Cart($oldCart);

        // l???y s??? l?????ng hi???n t???i c???a s???n ph???m c?? id l?? $id
        if (isset($cart->items)) {
            if (array_key_exists($id, $cart->items)) {
                $currentQty = $cart->items[$id]['qty'];
            } else {
                $currentQty = 0;
            }
        } else {
            $currentQty = 0;
        }

        if ($product->quantity <= ($qty + $currentQty)) {
            return redirect()->back()->with('error', 'Kh??ng c??n ????? h??ng trong kho, s??? l?????ng c??n l???i: ' . $product->quantity . '.');
        } else {
            $cart->add($product, $id, $qty);

            $request->session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Th??m th??nh c??ng s???n ph???m v??o gi??? h??ng.');
        }
    }

    public function getDeleteItemCart($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : NULL;
        $cart = new Cart($oldCart);

        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }


        return redirect()->back()->with('success', 'X??a th??nh c??ng s???n ph???m trong gi??? h??ng');
    }

    public function getShoppingCart()
    {
        $user = auth()->user();
        return view('pages.shoppingCart', compact('user'));
    }

    public function getUpdateCart(Request $request, $id, $qty)
    {
        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : NULL;
        $cart = new Cart($oldCart);

        // l???y s??? l?????ng hi???n t???i c???a s???n ph???m c?? id l?? $id
        $currentQty = $cart->items[$id]['qty'];

        if ($product->quantity <= ($qty + $currentQty)) {
            return redirect()->back()->with('error', 'Kh??ng c??n ????? h??ng trong kho, s??? l?????ng c??n l???i: ' . $product->quantity . '.');
        } else {
            $cart->update($product, $id, $qty);

            $request->session()->put('cart', $cart);

            return redirect()->back()->with('success', 'C???p nh???t gi??? h??ng th??nh c??ng.');
        }
    }

    public function getRegister()
    {
        $user = auth()->user();
        return view('pages.register', compact('user'));
    }

    public function postRegister(Request $request)
    {
        $this->validate(
            $request,
            [
                'txtName' => 'required',
                'txtEmail' => 'required|email|unique:Users,email',
                'txtPassword' => 'required',
                'txtRePassword' => 'same:txtPassword',
                'txtAddress' => 'required',
                'txtPhone' => 'required'
            ],
            [
                'txtName.required' => 'B???n ch??a nh???p H??? t??n.',
                'txtEmail.required' => 'B???n ch??a nh???p H??? t??n.',
                'txtEmail.email' => 'Email kh??ng ????ng ?????nh d???ng.',
                'txtEmail.unique' => 'Email ???? t???n t???i.',
                'txtPassword.required' => 'B???n ch??a nh???p M???t kh???u.',
                'txtRePassword.same' => 'M???t kh???u v?? nh???p l???i m???t kh???u kh??ng tr??ng kh???p, th??? l???i.',
                'txtAddress.required' => 'B???n ch??a nh???p ?????a ch???.',
                'txtPhone.required' => 'B???n ch??a nh???p S??? ??i???n tho???i.',
            ]
        );

        $user = new User;
        $user->name = $request->txtName;
        $user->email = $request->txtEmail;
        $user->password = bcrypt($request->txtPassword);
        $user->address = $request->txtAddress;
        $user->phone = $request->txtPhone;

        if ($request->hasFile('fileAvatar')) {
            $file = $request->file('fileAvatar');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('dang-ky')->with('error', 'B???n ch??? ???????c ch???n h??nh ???nh c?? ??u??i jpg, jpeg, png.');
            }

            $oldName = $file->getClientOriginalName();
            $avatar = str_random(4) . "_" . $oldName;
            while (file_exists('public/upload/users/' . $avatar)) {
                $avatar = str_random(4) . "_" . $oldName;
            }
            $file->move('public/upload/users', $avatar);
            $user->avatar = $avatar;
        } else {
            $user->avatar = "";
        }

        $user->save();

        return redirect('dang-nhap')->with('success', '????ng k?? th??nh c??ng, ????ng nh???p ngay.');
    }

    public function getLogin(Request $request)
    {
        if (Auth::user())
            return redirect()->back();

        $currentUrl = $request->current_url;

        // dd($currentUrl);

        $currentUrl = str_replace('/laravel_laptop/', '', $currentUrl);
        return view('pages.login', compact('currentUrl'));
    }

    public function postLogin(Request $request)
    {
        $this->validate(
            $request,
            [
                'txtEmail' => 'required|email',
                'txtPassword' => 'required'
            ],
            [
                'txtEmail.required' => 'B???n ch??a nh???p H??? t??n.',
                'txtEmail.email' => 'Email kh??ng ????ng ?????nh d???ng.',
                'txtPassword.required' => 'B???n ch??a nh???p M???t kh???u.',
            ]
        );

        $currentUrl = isset($request->currentUrl) ? $request->currentUrl : 'trang-chu';
        if (Auth::attempt(['email' => $request->txtEmail, 'password' => $request->txtPassword])) {
            return redirect($currentUrl)->with('success', '????ng nh???p th??nh c??ng');
        } else {
            return redirect('dang-nhap')->with('error', 'Email ho???c password kh??ng ch??nh x??c.');
        }
    }

    public function getUserInformation()
    {
        $user = auth()->user();
        if (!Auth::user())
            return redirect('trang-chu');

        return view('pages.userInformation', compact('user'));
    }

    public function postUserInformation(Request $request)
    {
        $this->validate(
            $request,
            [
                'txtName' => 'required',
                'txtAddress' => 'required',
                'txtPhone' => 'required'
            ],
            [
                'txtName.required' => 'B???n ch??a nh???p H??? t??n.',
                'txtAddress.required' => 'B???n ch??a nh???p ?????a ch???.',
                'txtPhone.required' => 'B???n ch??a nh???p S??? ??i???n tho???i.',
            ]
        );

        $user = User::find(Auth::user()->id);
        $user->name = $request->txtName;
        $user->address = $request->txtAddress;
        $user->phone = $request->txtPhone;

        if ($request->hasFile('fileAvatar')) {
            $file = $request->file('fileAvatar');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('thong-tin-nguoi-dung')->with('error', 'B???n ch??? ???????c ch???n h??nh ???nh c?? ??u??i jpg, jpeg, png.');
            }

            $oldName = $file->getClientOriginalName();
            $avatar = str_random(4) . "_" . $oldName;
            while (file_exists('public/upload/users/' . $avatar)) {
                $avatar = str_random(4) . "_" . $oldName;
            }
            $file->move('public/upload/users', $avatar);
            if ($user->avatar != '') {
                unlink('public/upload/users/' . $user->avatar);
            }
            $user->avatar = $avatar;
        }

        $user->save();

        return redirect()->back()->with('success', 'Thay ?????i th??ng tin th??nh c??ng.');
    }

    public function getChangePassword()
    {
        $user = auth()->user();
        if (!Auth::user())
            return redirect('trang-chu');

        return view('pages.changePassword', compact('user'));
    }

    public function postChangePassword(Request $request)
    {
        $this->validate(
            $request,
            [
                'txtOldPassword' => 'required',
                'txtNewPassword' => 'required',
                'txtRePassword' => 'same:txtNewPassword',
            ],
            [
                'txtOldPassword.required' => 'B???n ch??a nh???p M???t kh???u c??.',
                'txtNewPassword.required' => 'B???n ch??a nh???p M???t kh???u m???i.',
                'txtRePassword.same' => 'M???t kh???u v?? Nh???p l???i m???t kh???u kh??ng tr??ng kh???p, th??? l???i.',
            ]
        );

        if (Hash::check($request->txtOldPassword, Auth::user()->password)) {
            $user = User::find(Auth::user()->id);

            $user->password = bcrypt($request->txtNewPassword);
            $user->save();
            Auth::logout();
            return redirect('dang-nhap')->with('success', '?????i m???t kh???u th??nh c??ng, ????ng nh???p l???i.');
        } else {
            return redirect()->back()->with('error', 'M???t kh???u c?? kh??ng ch??nh x??c.');
        }
    }

    public function getLogout(Request $request)
    {
        $currentUrl = $request->current_url;
        $currentUrl = str_replace('/laravel_laptop/', '', $currentUrl);

        Auth::logout();
        return redirect($currentUrl)->with('success', '????ng xu???t th??nh c??ng');
    }

    public function getCheckout()
    {
        $user = auth()->user();
        return view('pages.checkout', compact('user'));
    }

    public function postCheckout(Request $request)
    {
        if (Auth::user()) {
            $cart = Session::get('cart');

            $bill = new Bill;
            $bill->id_users = Auth::user()->id;
            $bill->date_order = date('Y-m-d');
            $bill->total = $cart->totalPrice;
            $bill->shipping = $request->rdoShipping;
            $bill->payment = $request->rdoPayment;
            $bill->save();

            $order = '
                <h3>C???m ??n ' . Auth::user()->name . ' ???? ?????t h??ng</h3>
                <p>Demo Laravel ???? nh???n ???????c th??ng tin ????n h??ng c???a b???n</p>
                <h3>Th??ng tin ????n h??ng (M?? ????n h??ng: ' . $bill->id . ')</h3>
                <table border="0" width="100%" cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S???n ph???m</th>
                            <th>S??? l?????ng</th>
                            <th>Gi?? g???c</th>
                            <th>Gi?? khuy???n m??i</th>
                        </tr>
                    </thead>
                    <tbody>
            ';

            foreach ($cart->items as $key => $value) {
                $billDetail = new BillDetail;
                $billDetail->id_bill = $bill->id;
                $billDetail->id_product = $key;
                $billDetail->quantity = $value['qty'];
                $billDetail->unit_price = $value['item']->unit_price;
                $billDetail->promotion_price = $value['item']->promotion_price;
                $billDetail->save();

                $product = Product::find($key);
                $product->quantity -= $value['qty'];
                $product->quantity_sold += $value['qty'];
                $product->save();

                $order .= '
                        <tr>
                            <td>' . $value['item']->name . '</td>
                            <td>' . $value['qty'] . '</td>
                            <td>' . formatPrice($value['item']->unit_price) . '</td>
                            <td>' . formatPrice($value['item']->promotion_price) . '</td>
                        </tr>
                ';
            }

            $order .= '
                    </tbody>
                </table>
                <h3>T???ng c???ng:<small> ' . formatPrice($bill->total) . '</small></h3>
                <h3>H??nh th???c giao h??ng:<small> ' . $bill->shipping . '</small></h3>
                <h3>H??nh th???c thanh to??n:<small> ' . $bill->payment . '</small></h3>
            ';

            // Mail::to(Auth::user()->email)->send(new OrderShipped($order));

            event(
                $e = new RedisEvent(Auth::user())
            );

            Session::forget('cart');
            return redirect()->back()->with('success', '?????t h??ng th??nh c??ng');
        } else {
            $this->validate(
                $request,
                [
                    'txtName' => 'required',
                    'txtEmail' => 'required|email|unique:Users,email',
                    'txtPassword' => 'required',
                    'txtRePassword' => 'same:txtPassword',
                    'txtAddress' => 'required',
                    'txtPhone' => 'required'
                ],
                [
                    'txtName.required' => 'B???n ch??a nh???p H??? t??n.',
                    'txtEmail.required' => 'B???n ch??a nh???p H??? t??n.',
                    'txtEmail.email' => 'Email kh??ng ????ng ?????nh d???ng.',
                    'txtEmail.unique' => 'Email ???? t???n t???i.',
                    'txtPassword.required' => 'B???n ch??a nh???p M???t kh???u.',
                    'txtRePassword.same' => 'M???t kh???u v?? nh???p l???i m???t kh???u kh??ng tr??ng kh???p, th??? l???i.',
                    'txtAddress.required' => 'B???n ch??a nh???p ?????a ch???.',
                    'txtPhone.required' => 'B???n ch??a nh???p S??? ??i???n tho???i.',
                ]
            );

            $user = new User;
            $user->name = $request->txtName;
            $user->email = $request->txtEmail;
            $user->password = bcrypt($request->txtPassword);
            $user->address = $request->txtAddress;
            $user->phone = $request->txtPhone;
            $user->save();

            $cart = Session::get('cart');

            $bill = new Bill;
            $bill->id_users = $user->id;
            $bill->date_order = date('Y-m-d');
            $bill->total = $cart->totalPrice;
            $bill->shipping = $request->rdoShipping;
            $bill->payment = $request->rdoPayment;
            $bill->save();
            event(
                $e = new RedisEvent($bill)
            );

            $order = '
                <h3>C???m ??n ' . $user->name . ' ???? ?????t h??ng</h3>
                <p>Demo Laravel ???? nh???n ???????c th??ng tin ????n h??ng c???a b???n</p>
                <h3>Th??ng tin ????n h??ng (M?? ????n h??ng: ' . $bill->id . ')</h3>
                <table border="0" width="100%" cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S???n ph???m</th>
                            <th>S??? l?????ng</th>
                            <th>Gi?? g???c</th>
                            <th>Gi?? khuy???n m??i</th>
                        </tr>
                    </thead>
                    <tbody>
            ';

            foreach ($cart->items as $key => $value) {
                $billDetail = new BillDetail;
                $billDetail->id_bill = $bill->id;
                $billDetail->id_product = $key;
                $billDetail->quantity = $value['qty'];
                $billDetail->unit_price = $value['item']->unit_price;
                $billDetail->promotion_price = $value['item']->promotion_price;
                $billDetail->save();

                $product = Product::find($key);
                $product->quantity -= $value['qty'];
                $product->quantity_sold += $value['qty'];
                $product->save();

                $order .= '
                        <tr>
                            <td>' . $value['item']->name . '</td>
                            <td>' . $value['qty'] . '</td>
                            <td>' . formatPrice($value['item']->unit_price) . '</td>
                            <td>' . formatPrice($value['item']->promotion_price) . '</td>
                        </tr>
                ';
            }

            $order .= '
                    </tbody>
                </table>
                <h3>T???ng c???ng:<small> ' . formatPrice($bill->total) . '</small></h3>
                <h3>H??nh th???c giao h??ng:<small> ' . $bill->shipping . '</small></h3>
                <h3>H??nh th???c thanh to??n:<small> ' . $bill->payment . '</small></h3>
            ';

            Mail::to($user->email)->send(new OrderShipped($order));

            event(
                $e = new RedisEvent($user)
            );

            Session::forget('cart');
            return redirect()->back()->with('success', '?????t h??ng th??nh c??ng');
        }
    }

    public function getSearch(Request $request)
    {
        $user = auth()->user();
        $min = 0;
        $max = 200000000;
        $sort = 'latest';
        $show = 9;

        $cbbCategory = $request->cbbCategory;

        if ($cbbCategory == '*') {
            $category = Category::all();
            $typeProduct = TypeProduct::all();
        } else {
            $category = Category::find($request->cbbCategory);
            $typeProduct = TypeProduct::where('id_category', $category['id'])->get();
        }

        $idType = collect([]);
        foreach ($typeProduct as $item) {
            $idType->push($item->id);
        }

        if (isset($request->min)) {
            $min = $request->min;
        }
        if (isset($request->max)) {
            $max = $request->max;
        }
        if (isset($request->sort)) {
            $sort = $request->sort;
        }
        if (isset($request->show)) {
            $show = $request->show;
        }

        $keyword = $request->txtKeyword;

        switch ($sort) {
            case 'latest':
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->where(function ($query) use ($keyword) {
                        $query->where('name', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('description', 'LIKE', '%' . $keyword . '%');
                    })
                    ->orderBy('id', 'DESC')->paginate($show);
                break;
            case 'oldest':
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->where(function ($query) use ($keyword) {
                        $query->where('name', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('description', 'LIKE', '%' . $keyword . '%');
                    })
                    ->orderBy('id', 'ASC')->paginate($show);
                break;

            case 'price_asc':
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->where(function ($query) use ($keyword) {
                        $query->where('name', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('description', 'LIKE', '%' . $keyword . '%');
                    })
                    ->orderBy('unit_price', 'ASC')->paginate($show);
                break;

            case 'price_desc':
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->where(function ($query) use ($keyword) {
                        $query->where('name', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('description', 'LIKE', '%' . $keyword . '%');
                    })
                    ->orderBy('unit_price', 'DESC')->paginate($show);
                break;

            case 'rating':
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->where(function ($query) use ($keyword) {
                        $query->where('name', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('description', 'LIKE', '%' . $keyword . '%');
                    })
                    ->orderBy('rating', 'DESC')->paginate($show);
                break;

            case 'selling':
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->where(function ($query) use ($keyword) {
                        $query->where('name', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('description', 'LIKE', '%' . $keyword . '%');
                    })
                    ->orderBy('quantity_sold', 'DESC')->paginate($show);
                break;

            default:
                $products = Product::whereIn('id_type', $idType)
                    ->where(function ($query) use ($min, $max) {
                        $query->whereBetween('unit_price', [$min, $max])
                            ->orWhere(function ($query) use ($min, $max) {
                                $query->whereBetween('promotion_price', [$min, $max]);
                            });
                    })
                    ->where(function ($query) use ($keyword) {
                        $query->where('name', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('description', 'LIKE', '%' . $keyword . '%');
                    })
                    ->orderBy('id', 'DESC')->paginate($show);
                break;
        }
        return view('pages.search', compact('category', 'products', 'keyword', 'cbbCategory', 'min', 'max', 'sort', 'show', 'user'));
    }
}
