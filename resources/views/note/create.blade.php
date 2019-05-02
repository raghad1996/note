<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
  body {
background-color:#333;
margin-top:18px
}

.container {
padding:33px;
background-color:#fff
}

</style>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<div class="container">
<div class="row">
    <div class="col-md-4">
        <img src="https://cdn1.iconfinder.com/data/icons/softwaredemo/PNG/256x256/Pencil3.png" class="img-responsive center-block" alt="">
    </div>
    <div class="col-md-8">
       
      <form action="{{ route('note.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
           <h1> Note Create </h1>
            @if(Session::has('error') )
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            {!! \Session::get('error') !!}
                        </div>
                    @endif
            <label for="txtComment">Enter a title here:</label>
            <input type="text" name="title" id="txtComment" class="form-control" placeholder="Enter a title">
            <br>
            <hr>
        <p>
            Write your descrioption
        </p>

        <textarea id="txtCommentHere" class="form-control" rows="3"name="description">
        </textarea>
        <hr>
        <button type="submit" class="btn btn-dispatch btn-primary float-right">Dispatch</button>
        <hr>
            
        </form>
        
        </div>
</div>