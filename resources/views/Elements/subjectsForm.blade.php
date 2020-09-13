<div class="w-full mx-auto lg:flex text-black mb-2">
    <select name="subjects[]" id="" class="lg:w-1/2 text-purple-500 h-10 rounded sm:w-30 border">
        <option value="" selected disabled>-Seleccionar materia-</option>
        @foreach ($subjects as $subject)
        <option value="{{$subject->id}}">{{$subject->name}}</option>
        @endforeach
    </select>
    <input type="number" step="0.01" name="scores[]" placeholder="Nota" min="0" max="10" class="border rounded mx-2 lg:w-20 sm:w-10">
    <input type="number" name="unities[]" placeholder="Unidades Valorativas" min="1" max="9" class="border rounded lg:w-20 sm:w-10">
</div>
