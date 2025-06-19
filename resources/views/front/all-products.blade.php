<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category Products | Parma</title>
  <link rel="shortcut icon" href="{{ asset('assets/svgs/logo-mark.svg') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <!--<script src="https://cdn.tailwindcss.com"></script>-->
</head>

<body>
		<!-- Topbar -->
		<section class="flex items-center justify-between gap-5 wrapper">
			<div class="flex items-center gap-3">
            <a href="{{ route('front.index') }}" class="p-2 bg-white rounded-full">
                <img src="{{asset('assets/svgs/ic-arrow-left.svg')}}" class="size-5" alt="">
            </a>
        </section>
         <section class="wrapper !px-0 flex flex-col gap-2.5">
			<p class="px-4 text-base font-bold">
				Latest Products
			</p>
			<div id="proudctsSlider" class="relative">
				<!-- Panadomal -->

                 @forelse($products as $product)
				<div class="rounded-2xl bg-white py-3.5 pl-4 pr-[22px] inline-flex flex-col gap-4 items-start mr-4 relative w-[158px]">
					<img src="{{Storage::url($product->photo)}}" class="h-[100px] w-full object-contain" alt="">
					<div>
						<a href="{{route('front.product.details', $product->slug)}}" class="text-base font-semibold w-[120px] truncate stretched-link block">
							{{$product->name}}
						</a>
						<p class="text-sm truncate text-grey">
							Rp {{$product->price}}
						</p>
					</div>
				</div>
                @empty
                <P>
                    Belum ada produk baru tersedia
                </P>
                @endforelse

			</div>
		</section>
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
</body>

</html>
