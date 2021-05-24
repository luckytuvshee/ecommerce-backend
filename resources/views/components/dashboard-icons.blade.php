<div class="row">
  <div class="col-xl-3 col-md-6">
    <div style="height: 10.5em; text-align: center; text-transform: uppercase; background-color: rgb(29, 41, 56, 0.9)" class="card text-white mb-4 dashboard-card">
      <div style="font-weight: 500; height: 3em" class="card-footer d-flex align-items-center justify-content-center">
        <a style="display: flex; align-items: center; text-decoration: none" class="small text-white stretched-link" href="{{ route('orders') }}">
          <div><i style="font-size: 28px" class="fas fa-shopping-bag"></i></div>
          <span style="margin-left: 10px; font-weight: 700">Нийт онлайн захиалга</span>
        </a>
      </div>
      <div class="card-body">
        <div style="font-size: 28px; font-family: Iosevka; margin-top: 10px">{{ $order_count }}</div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6">
    <div style="height: 10.5em; text-align: center; text-transform: uppercase; background-color: rgb(29, 41, 56, 0.9)" class="card text-white mb-4 dashboard-card">
      <div style="font-weight: 500; height: 3em" class="card-footer d-flex align-items-center justify-content-center">
        <a style="display: flex; align-items: center; text-decoration: none" class="small text-white stretched-link" href="{{ route('products') }}">
          <div><i style="font-size: 28px" class="fas fa-box"></i></div>
          <span style="margin-left: 10px; font-weight: 700">Нийт бүтээгдэхүүн</span>
        </a>
      </div>
      <div class="card-body">
        <div style="font-size: 28px; font-family: Iosevka; margin-top: 10px">{{ $product_count }}</div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6">
    <div style="height: 10.5em; text-align: center; text-transform: uppercase; background-color: rgb(29, 41, 56, 0.9)" class="card text-white mb-4 dashboard-card">
      <div style="font-weight: 500; height: 3em" class="card-footer d-flex align-items-center justify-content-center">
        <a style="display: flex; align-items: center; text-decoration: none" class="small text-white stretched-link" href="{{ route('users') }}">
          <div><i style="font-size: 28px" class="fas fa-box"></i></div>
          <span style="margin-left: 10px; font-weight: 700">Бүртгэлтэй хэрэглэгчид</span>
        </a>
      </div>
      <div class="card-body">
        <div style="font-size: 28px; font-family: Iosevka; margin-top: 10px">{{ $user_count }}</div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6">
    <div style="height: 10.5em; text-align: center; text-transform: uppercase; background-color: rgb(29, 41, 56, 0.9)" class="card text-white mb-4 dashboard-card">
      <div style="font-weight: 500; height: 3em" class="card-footer d-flex align-items-center justify-content-center">
        <a style="display: flex; align-items: center; text-decoration: none" class="small text-white stretched-link" href="{{ route('employees') }}">
          <div><i style="font-size: 28px" class="fas fa-box"></i></div>
          <span style="margin-left: 10px; font-weight: 700">Нийт ажилчид</span>
        </a>
      </div>
      <div class="card-body">
        <div style="font-size: 28px; font-family: Iosevka; margin-top: 10px">{{ $employee_count }}</div>
      </div>
    </div>
  </div>
</div>