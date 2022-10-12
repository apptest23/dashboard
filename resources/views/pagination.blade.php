
@if ($paginator->hasPages())
    <div class="dataTables_wrapper">


   <!--  <div class="dataTables_info new_pagination " id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 14 entries</div> -->

   <div class="dataTables_info new_pagination " id="example2_info" role="status" aria-live="polite"> Showing {{($paginator->currentpage()-1)*$paginator->perpage()+1}} to {{(($paginator->currentpage()-1)*$paginator->perpage())+$paginator->count()}} of {{$paginator->total()}} entries</div>

  


    <div class="dataTables_paginate paging_simple_numbers new_pagination " id="example2_paginate">
       
        @if ($paginator->onFirstPage())

        <a class="paginate_button previous disabled" aria-controls="example2" data-dt-idx="0" tabindex="0" id="example2_previous">Previous</a>
           
        @else 
             <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="paginate_button previous " aria-controls="example2" data-dt-idx="0" tabindex="0" id="example2_previous">Previous</a>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <span><a class="paginate_button " aria-controls="example2" data-dt-idx="{{ $element }}" tabindex="0">{{ $element }}</a></span>
            @endif

        <!--    <div> -->
           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())

                        <span><a class="paginate_button current" aria-controls="example2" data-dt-idx="1" tabindex="0">{{ $page }}</a></span>
                    @else
                      

                        <span><a href="{{ $url }}"class="paginate_button " aria-controls="example2" data-dt-idx="1" tabindex="0">{{ $page }}</a></span>

                    @endif
                @endforeach
            @endif
        @endforeach

     <!--    </div> -->


        
        @if ($paginator->hasMorePages())

        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="paginate_button next" aria-controls="example2" data-dt-idx="3" tabindex="0" id="example2_next">Next</a>
           
        @else
        <a class="paginate_button next disabled" aria-controls="example2" data-dt-idx="3" tabindex="0" id="example2_next">Next</a>
        @endif
   </div>
</div>
@endif 