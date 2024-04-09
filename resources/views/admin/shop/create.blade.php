<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tạo cửa hàng</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/upload.css')}}" />
  </head>

  <body>
    <div class="container">
      <div class="card mt-5">
        <div class="card-header">
          <h4 class="card-title">Tạo cửa hàng của bạn</h4>
        </div>
        <div class="card-body">
          <form action="{{ route('shopCreate') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="row">
              <div class="col-md-6 col-12">
                <div id="file-upload-form" class="uploader @error('path') is-invalid @enderror">
                  <input id="file-upload" type="file" name="path" accept="image/*" />
                  <label for="file-upload" id="file-drag">
                    <img id="file-image" src="#" alt="Preview" class="hidden">
                    <div id="start">
                    <i class="fa fa-download" aria-hidden="true"></i>
                    <div>Tải lên ảnh cửa hàng</div>
                    @error('path')
                      <span class="text-danger">{{ $message }}</span><br>
                    @enderror
                    <div id="notimage" class="hidden">Ảnh cửa hàng
                    </div>
                    <span id="file-upload-btn" class="btn btn-primary">Chọn ảnh</span>
                    </div><br>
                    @if(session('errorUpload'))
                      <span class="text-danger">Bạn phải sử dụng nút</span><br>
                    @enderror
                    <div id="response" class="hidden">
                    <span class="text-danger" id="max-file"></span>
                    <div id="messages">

                    </div>
                    <progress class="progress" id="file-progress" value="0">
                      <span>0</span>%
                    </progress>
                    </div>
                  </label>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="name_shop">Tên cửa hàng</label>
                  <input type="text" name="name_shop" id="name_shop" class="form-control  @error('name_shop') is-invalid @enderror" placeholder="Fashionista" value="{{old('name_shop')}}" required autofocus>
                  @error('name_shop')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="phone">Số điện thoại</label>
                  <input type="number" name="phone" id="phone" class="form-control  @error('phone') is-invalid @enderror" placeholder="0812xxx" value="{{old('phone')}}" required >
                  @error('phone')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="address">Địa chỉ</label>
                  <input type="text" name="address" id="address" class="form-control  @error('address') is-invalid @enderror" placeholder="3425 Stone Street" value="{{old('address')}}" required >
                  @error('address')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="desc">Mô tả</label>
                    <textarea name="desc" id="desc" cols="30" class="form-control @error('desc') is-invalid @enderror" placeholder="We are selling  . . .">{{ old('desc') }}</textarea>
                    @error('desc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary float-end">Tạo</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="{{ asset('assets/js/upload.js') }}"></script>
    <script>
      document.getElementById('desc').addEventListener('keyup', function() {
          this.style.overflow = 'hidden';
          this.style.height = 0;
          this.style.height = this.scrollHeight + 'px';
      }, false);
    </script>
  </body>
</html>
