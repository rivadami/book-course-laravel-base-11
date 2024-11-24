@csrf

<label for="title">Title</label>
<input type="text" name="title" id="" value="{{ old('title', $post->title) }}">

<label for="slug">Slug</label>
<input type="text" name="slug" id="" value="{{ old('slug',$post->slug) }}">

<label for="Content">Content</label>
<textarea name="content" id="">{{ old('content',$post->content) }}</textarea>

<label for="category_id">Content</label>
<select name="category_id" id="">
    @foreach ($categories as $title => $id)
        <option {{ $post->category_id && old('category_id', $post->category->id) == $id ? "selected" : "" }} value="{{ $id }}">   {{ $title }} </option>
    @endforeach

</select>

<label for="Description">Description</label>
<textarea name="description" id="">{{ old('description',$post->description) }}</textarea>

<label for="posted">Posted</label>
<select name="posted" id="">
    <option {{ old('posted', $post->posted) == "not" ? "selected" : "" }} value="not">Not</option>
    <option {{ old('posted', $post->posted) == "yes" ? "selected" : "" }} value="yes">Yes</option>
</select>

@if (isset($task) && $task == 'edit')
    <label for="image">Image</label>
    <input type="file" name="image">
@endif

<button type="submit">SEND</button>
