@extends('layouts.index-master')

@section('featured')
    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpg">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#">Kuşbaşı</a></h6>
                <h5>$30.00</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.jpg">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#">Muz</a></h6>
                <h5>$30.00</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-3.jpg">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#">Crab Pool Security</a></h6>
                <h5>$30.00</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#">Karpuz</a></h6>
                <h5>$30.00</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-5.jpg">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#">Üzüm</a></h6>
                <h5>$30.00</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-6.jpg">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#">Hamburger</a></h6>
                <h5>$30.00</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-7.jpg">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#">Mango</a></h6>
                <h5>$30.00</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-8.jpg">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#">Elma</a></h6>
                <h5>$30.00</h5>
            </div>
        </div>
    </div>
    <form action="{{route('product.export')}}" method="get">
        <button type="submit" class="btn btn-primary">Ürünleri İndir</button>
    </form>
@endsection
