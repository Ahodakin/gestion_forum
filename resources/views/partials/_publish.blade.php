
<!-- Form Start -->
<div class="container-fluid pt-10 px-4 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class=" col-xl-10">
        <div class="bg-secondary rounded h-100 p-4">

            {{--  <div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
            </div>  --}}

            <h6 class="mb-4">Publish</h6>
            <form action="/publish_post" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Titre</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" >Contenu</label>
                    <textarea class="form-control" name="content" value="{{ old('content') }}" style="height: 150px;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">publish</button>
            </form>

        </div>
    </div>
</div>
<!-- Form End -->
