<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">
                    @if($titleIcon)
                    <i class={{ $titleIcon }}></i> 
                    @endif
                    {{ $title }}
                </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        @php
                            $i=0;
                        @endphp
                        @foreach ($breadcrumb as $key=>$route)
                            @if($route)
                                @if($route==$currentRouteName)                                 
                                    <li class="breadcrumb-item active">{{ $key }} </li>
                                @else
                                    <li class="breadcrumb-item"><a href="{{ route($route) }}">{{ $key }}</a></li>
                                @endif
            
                            @else
                                <li class="breadcrumb-item text-muted">                                                
                                    {{ $key }}
                                </li>
                            @endif
                            
                            @if(!$loop->last)
                
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>
