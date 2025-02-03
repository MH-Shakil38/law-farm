<option selected disabled>Select One</option>
@forelse (users() as $info)
    <option value="{{ $info->id }}" {{ isset($lawyer) && $lawyer->id == $info->id ? 'selected' : ''  }}>{{ $info->name }}</option>
@empty
@endforelse
