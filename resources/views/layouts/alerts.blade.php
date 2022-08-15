<style>
    .closebtn {
        color: black;
        font-size: 35px;
        cursor: pointer;
        float: right;
    }

    .alert {
        font-size: 20px;
    }

    .danger {
        background: red;
    }
</style>


@if ($errors->any())
    <div class="row alert alert danger bg-red border border-red text-white delay-500">
        <div class="col-10 pt-2">
            <strong>Danger!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li >{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        <div class="col-2">
            <span class="closebtn ml-2 text-white font-bold leading-5 cursor-pointer" onclick="this.parentElement.parentElement.style.display='none';">&times;</span>
        </div>
    </div>
@endif

@if(session()->has('success'))
    <div class="row alert alert bg-green border border-green text-white delay-500" >
        <div class="col-10 pt-2">
            <strong>Congrats!</strong> {{ session()->get('success') }}
        </div>
        
        <div class="col-2">
            <span class="closebtn ml-2 text-white font-bold leading-5 cursor-pointer" onclick="this.parentElement.parentElement.style.display='none';">&times;</span>
        </div>
    </div>
@endif

@if(session()->has('error'))
    <div class="row alert alert danger bg-red border border-red text-white delay-700" >
        <div class="col-10 pt-2">    
            <strong>Danger!</strong> {{ session()->get('error') }}
        </div>

        <div class="col-2">
            <span class="closebtn ml-2 text-white font-bold leading-5 cursor-pointer" onclick="this.parentElement.parentElement.style.display='none';">&times;</span>
        </div>
    </div>
@endif