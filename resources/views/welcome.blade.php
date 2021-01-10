@extends('layout')

@section('content')
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Ваше имя</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Ваш e-mail</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Ваш номер телефона</label>
            <input type="number" class="form-control" id="phone">
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Выберите курс</label>
            <select class="form-select" id="course">
                <option selected disabled></option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
      
     
       <div class="submitdiv">
        <button type="submit" class="btn btn-primary">Записаться</button>
        <p class="confidential">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c <a href="http://project3033659.tilda.ws/page14177895.html">политикой конфиденциальности</a></p>
        </div>
    </form>
@endsection