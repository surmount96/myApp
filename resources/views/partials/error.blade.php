@if(count($errors)>0)
        <div class="row">
            <div class="col-md-4 offset-4">
                <ul class="">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif