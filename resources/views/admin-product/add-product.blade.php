@extends('layouts-admin.layout-admin')

@section('content')
    <div class="content-wrapper">
        @php
            $update = (!empty($product)) ? true : false;
        @endphp
        @if ($update)
            <h1>Редактирование: {{ $product->name }} </h1>
        @else
            <h1>Создание: {{ $general_type->kogo_chego }} </h1>
        @endif
        
        @php
            
            // echo __FILE__.' '.__LINE__;
            // echo '<pre>';
            // print_r($manufacturer);
            // echo '</pre>';
        @endphp
        <form class='add_product' action="{{ $update ? '/admin/product/updata' : '/admin/product/save'}}" method="post">
            @csrf
            @if ($update)
                <input type="hidden" name="pid" value='{{ $product->id }}'>
            @else
                <input type="hidden" name="lvl" value='{{ $lvl1 }}'>
            @endif
            
            <label for="name">
                <h2>Наименование товара</h2>
                <input type="text" name='name' id='name' value='{{ $update ? $product->name : ''}}'>
            </label>
            <label for="price">
                <h2>Стоимость</h2>
                <input type="number" name='price' id='price' value='{{ $update ? $product->price : ''}}'>
            </label>
            <div class="select"> 
                <label for="manufacturer">
                    <h2>Выбирите производителя</h2>
                    <select name="manufacturer" id='manufacturer'>
                        <option value="" {{ !$update ? 'selected' : '' }} >не выбран</option>
                        @foreach ($manufacturer as $item)
                            <option value="{{$item->id}}" {{ ($update && $product->manufacturert_id == $item->id) ? 'selected' : ''}}>{{ $item->name  }}</option>
                        @endforeach
                    </select>
                </label>
                <label for="lvl2">
                    <h2>Выбирите категории товара</h2>
                    <select name="lvl2" id='lvl2'>
                        <option value="" selected>не выбрана</option>
                        @foreach ($lvl2 as $item)
                            <option value="{{$item->id}}"  {{ ($update && in_array($item->id, $product->category)) ? 'selected' : ''}}>{{ $item->name  }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            
            <label for="">
                <h2>Добавте изображение</h2>
                <input type="file" name="img" > <span>{{ $update ? 'если не выберите фото, будет использоваться прежнее' : '' }}</span>
            </label>
            <div class='fields_random'>
                <h2>Произвольные данные</h2>
                <p>
                    <span>
                        <b>наименование</b>
                        @php
                            $name = $update ? 'fr_' . $product->fields_random[0]->id . '_name' : 'fr_1_name';
                            $value = $update ? $product->fields_random[0]->name : ''
                        @endphp
                        <input type="text" name='{{ $name }}' value = '{{ $value }}'>
                    </span>
                    <span>
                        <b>значение</b>
                        @php
                            $name = $update ? 'fr_' . $product->fields_random[0]->id . '_value' : 'fr_1_value';
                            $value = $update ? $product->fields_random[0]->value : ''
                        @endphp
                        <input type="text" name='{{ $name }}' value = '{{ $value }}'>
                    </span>
                </p>
                <p>
                    <span>
                        <b>наименование</b>
                        @php
                            $name = $update ? 'fr_' . $product->fields_random[1]->id . '_name' : 'fr_2_name';
                            $value = $update ? $product->fields_random[1]->name : ''
                        @endphp
                        <input type="text" name='{{ $name }}' value = '{{ $value }}'>
                    </span>
                    <span>
                        <b>значение</b>
                        @php
                            $name = $update ? 'fr_' . $product->fields_random[1]->id . '_value' : 'fr_2_value';
                            $value = $update ? $product->fields_random[1]->value : ''
                        @endphp
                        <input type="text" name='{{ $name }}' value = '{{ $value }}'>
                    </span>
                </p>
                <p>
                    <span>
                        <b>наименование</b>
                        @php
                            $name = $update ? 'fr_' . $product->fields_random[2]->id . '_name' : 'fr_3_name';
                            $value = $update ? $product->fields_random[2]->name : ''
                        @endphp
                        <input type="text" name='{{ $name }}' value = '{{ $value }}'>
                    </span>
                    <span>
                        <b>значение</b>
                        @php
                            $name = $update ? 'fr_' . $product->fields_random[2]->id . '_value' : 'fr_3_value';
                            $value = $update ? $product->fields_random[2]->value : ''
                        @endphp
                        <input type="text" name='{{ $name }}' value = '{{ $value }}'>
                    </span>
                </p>
            </div>
            
            <button class='btn_send_ajax js_send_ajax' type="submit">Добавить</button>
            <button type="reset">Очистить форму</button>
            @if ($update)
                <a href="{{ route('product.list') }}">Вернуться к списку продуктов</a>
            @endif
        </form>
    </div>
    
@endsection