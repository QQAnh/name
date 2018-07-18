@extends('client.layoutHomepage.master')
@section('title', 'Dashboard Admin')
<style>
    .gallery-wrap .img-big-wrap img {
        height: 450px;
        width: auto;
        display: inline-block;
        cursor: zoom-in;
    }


    .gallery-wrap .img-small-wrap .item-gallery {
        width: 60px;
        height: 60px;
        border: 1px solid #ddd;
        margin: 7px 2px;
        display: inline-block;
        overflow: hidden;
    }

    .gallery-wrap .img-small-wrap {
        text-align: center;
    }
    .gallery-wrap .img-small-wrap img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        border-radius: 4px;
        cursor: zoom-in;
    }
</style>

@section('content')
    <div class="container">
        <hr>


        <div class="card">
            <div class="row">
                <aside class="col-sm-5 border-right">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap">
                            <div> <a href="#"><img src="{{$product->thumbnail}}"></a></div>
                        </div> <!-- slider-product.// -->
                    </article> <!-- gallery-wrap .end// -->
                </aside>
                <aside class="col-sm-7">
                    <article class="card-body p-5">
                        <h3 class="title mb-3">{{$product->title}}</h3>

                        <p class="price-detail-wrap">
	<span class="price h3 text-warning">
		<span class="currency"></span><span class="num">{{$product->price}}</span>
	</span>
                        <dl class="item-property">
                            <dt>Description</dt>
                            <dd><p>{{$product->description}} </p></dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>CategoryId</dt>
                            <dd>{{$product->categoryId}}</dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>Color</dt>
                            <dd>Black and white</dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="param param-feature">

                        </dl>  <!-- item-property-hor .// -->

                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <dl class="param param-inline">
                                    <dt>Quantity: </dt>
                                    <dd>
                                        <select class="form-control form-control-sm" style="width:70px;">
                                            <option> 1 </option>
                                            <option> 2 </option>
                                            <option> 3 </option>
                                        </select>
                                    </dd>
                                </dl>  <!-- item-property .// -->
                            </div> <!-- col.// -->
                             <!-- col.// -->
                        </div> <!-- row.// -->
                        <hr>
                        <a href="#" class="btn btn-lg btn-primary text-uppercase"> Buy now </a>
                        <a href="#" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Add to cart </a>
                    </article> <!-- card-body.// -->
                </aside> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- card.// -->


    </div>
    <!--container.//-->


    <br><br><br>




@endsection