<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($photo->title) ? $photo->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($photo->content) ? $photo->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tag') ? 'has-error' : ''}}">
    <label for="tag" class="control-label">{{ 'Tag' }}</label>
    <input class="form-control" name="tag" type="text" id="tag" value="{{ isset($photo->tag) ? $photo->tag : ''}}" >
    {!! $errors->first('tag', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('likes') ? 'has-error' : ''}}">
    <label for="likes" class="control-label">{{ 'Likes' }}</label>
    <input class="form-control" name="likes" type="number" id="likes" value="{{ isset($photo->likes) ? $photo->likes : ''}}" >
    {!! $errors->first('likes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($photo->image) ? $photo->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
