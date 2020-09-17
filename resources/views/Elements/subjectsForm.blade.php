<div class="w-full mx-auto lg:flex text-black mb-2 sm:grid-cols-1">
    <div class="lg:w-1/2 sm:w-full">
        <select name="subjects[]" id="" class="w-1/2 text-purple-500 h-10 rounded border">
            <option value="" selected disabled>Seleccionar</option>
            @foreach ($subjects as $subject)
            <option value="{{$subject->id}}">{{$subject->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="lg:flex sm:block lg:w-1/2 sm:w-full sm:mx-auto sm:text-center">
        <input type="number" step="0.01" name="scores[]" placeholder="Nota" min="0" max="10" class="border rounded mx-2 lg:w-20 sm:w-10 sm:mt-2">
        <input type="number" name="unities[]" placeholder="Unidades Valorativas" min="1" max="9" class="border rounded mx-2 lg:w-20 sm:w-10 sm:m-2">
    </div>
</div>
