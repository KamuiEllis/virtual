<x-layout>
    <div class='p-4'>
        <p class='lead' style='font-size:25px;'>Dashboard</p>
        <hr/>
        <div class='container-fluid' style='background-color:white; height:200px; padding:50px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>
            <div class="row">
                <div class="col-md-4">
                    <div class="card block p-2">
                        10
                        <p class='block-title'>Pending Orders</p>
                        <hr style='margin-top: 5px;'/>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card block p-2">
                        200
                        <p class='block-title'>Products</p>
                        <hr style='margin-top: 5px;'/>
                     
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card block p-2">
                        <div>
                            5
                        <p class='block-title'>Today's Visitors</p>
                        <hr style='margin-top: 5px;'/>
                       
                        </div>
                    </div>
                </div>
            </div>

          
        </div>

        <div class='container mt-5'  style='background-color:white; height:700px; padding:50px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>
            {!! $chart->container() !!}
        </div>
       
    </div>    

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
</x-layout>