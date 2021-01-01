<template>
<div class="container py-4">
  <div class="card mx-auto" style="max-width: 25rem;">
    <h4 class="card-header">問題集1問題1</h4>
    <img class="card-img-top" :src="'/images/kyokumen/1-1.png'" alt="1-1">
    <div class="card-body">
      <form>
        <!-- ラジオボタン -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radios" id="radios1" value="6六歩" checked>
          <label class="form-check-label font-weight-bold" for="radios1">
            6六歩
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radios" id="radios2" value="7九玉">
          <label class="form-check-label font-weight-bold" for="radios2">
            7九玉
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radios" id="radios3" value="3五歩">
          <label class="form-check-label font-weight-bold" for="radios3">
            3五歩
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radios" id="radios4" value="4五桂馬">
          <label class="form-check-label font-weight-bold" for="radios4">
            4五桂馬
          </label>
        </div>
      </form>      
      <a href="#" class="btn btn-primary">次の問題へ</a>
    </div>
  </div>
</div>
</template>

<script>
  export default {}
</script>