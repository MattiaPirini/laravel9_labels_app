<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="/" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
        <a class="nav-item nav-link" href="/about">About</a>
        <a class="nav-item nav-link" href="/products">Products</a>
        <a class="nav-item nav-link" href="#">--</a>
        <a class="nav-item nav-link" href="/todo">Show todo</a>        
        <a class="nav-item nav-link" href="{{ route('showListCompleted') }}">Show Completed</a>
        <a class="nav-item nav-link" href="{{ route('deleteList') }}"><i class="fa-solid fa-trash-can"></i> Delete All</a>
        <a class="nav-item nav-link" href="#">--</a>
        <a class="nav-item nav-link" href="/mail">Mail</a>
    </div>
</nav>
