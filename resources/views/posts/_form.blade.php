@csrf

<label class="uppercase text-white-700 text-xs" for="title">Titulo</label>
<span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>
<input type="text" name="title" id="title" class="text-black rounded border-gray-200 w-full mb-4" 
value="{{ old('title', $post->title) }}">

<label class="uppercase text-white-700 text-xs" for="body">Contenido</label>
<span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>
<textarea name="body" rows="5" id="body" class="text-black rounded border-gray-200 w-full mb-4">{{ old('body', $post->body) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index')}}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-blue-800 text-white rounded px-4 py-2 cursor-pointer">

</div>