@csrf

<label for="title">Title</label>
<input class="form-control" type="text" name="title" id="" value="{{ old('title', $category->title) }}">

<label for="slug">Slug</label>
<input class="form-control" type="text" name="slug" id="" value="{{ old('slug',$category->slug) }}">

<button type="submit">SEND</button>
