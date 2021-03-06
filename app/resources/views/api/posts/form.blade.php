<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->title) ? $post->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($post->content) ? $post->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tag') ? 'has-error' : ''}}">
    <label for="tag" class="control-label">{{ 'Tag' }}</label>
    <input class="form-control" name="tag" type="text" id="tag" value="{{ isset($post->tag) ? $post->tag : ''}}" >
    {!! $errors->first('tag', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('likes') ? 'has-error' : ''}}">
    <label for="likes" class="control-label">{{ 'Likes' }}</label>
    <input class="form-control" name="likes" type="number" id="likes" value="{{ isset($post->likes) ? $post->likes : ''}}" >
    {!! $errors->first('likes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($post->image) ? $post->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
