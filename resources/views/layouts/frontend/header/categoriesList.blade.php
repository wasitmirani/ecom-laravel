<div class="col-lg-3">
    <div class="category-list-sidebar">
        <div class="category-list-sidebar-header">
            <button class="btn btn-link badge-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                All Categories <i class="mdi mdi-menu" aria-hidden="true"></i>
            </button>
        </div>
        <div class="collapse   @if(request()->path()=="/") show @endif" id="collapseExample">
            <div class="category-list-sidebar-body">
                @php
                $categories=getCategories();
                @endphp
                @foreach ($categories as $category)
                <div class="item">
                    <div class="sidebar-category-item">
                        <a href="{{route('products',['category'=>Str::slug($category->name, '-'),'category_id'=>$category->id])}}">
                            <img class="img-fluid" src="{{$category->thumbnail}}" alt="">
                            <h6>{{$category->name}}</h6>
                            <p>{{$category->total}}</p>
                        </a>
                    </div>
                </div>
                @if ($loop->iteration == 9)
                @break
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
