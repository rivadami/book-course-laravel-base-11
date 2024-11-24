@csrf

<label for="title">Title</label>
<input type="text" name="title" id="" value="{{ old('title', $category->title) }}">

<label for="slug">Slug</label>
<input type="text" name="slug" id="" value="{{ old('slug',$category->slug) }}">

<button type="submit">SEND</button>
