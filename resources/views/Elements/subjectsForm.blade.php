<div class="w-full mx-auto flex text-black mb-2">
    <select name="subject" id="" class="lg:w-1/2 text-purple-500 h-10 rounded sm:w-full border">
        <option value="" selected disabled>-Seleccionar materia-</option>
        @foreach ($subjects as $subject)
        <option value="{{$subject->id}}">{{$subject->name}}</option>
        @endforeach
    </select>
    <input type="number" value="{{$i}}" placeholder="Ingrese su nota" min="0" max="10" class="border rounded mx-2">
    <input type="number" value="{{$i}}" placeholder="Número de Unidades valorativas" min="1" max="9" class="border rounded">
</div>
