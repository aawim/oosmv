          <div class="sidebar col-md-3 col-sm-3">
            <ul class="list-group margin-bottom-25 sidebar-menu">
            @foreach ($categories as $count => $catrgory)
            <li class="list-group-item clearfix"><a href="{{url('find/'. $catrgory->id)}}">
            <i class="fa fa-angle-right"></i>{{$catrgory->name}}</a></li>
          @endforeach
            </ul>
          </div>





         