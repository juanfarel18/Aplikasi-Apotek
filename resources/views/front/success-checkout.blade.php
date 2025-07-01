<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Checkout | Parma</title>
    <link rel="shortcut icon" href="{{asset('assets/svgs/logo-mark.svg')}}" type="image/x-icon">
		<link rel="stylesheet" href="{{asset('css/main.css')}}">
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

       <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body>
    <div class="h-dvh flex flex-col justify-center items-center gap-[33px]">
      <img src="{{asset('assets/svgs/nekodicine.svg')}}" alt="">
      <div class="flex flex-col gap-2.5 items-center">
        <p class="font-bold text-[22px] text-center">
          Yeay! Order Finished
        </p>
        <p class="text-base text-center">
          We’ve received your order and then <br>
          our staff will check them now
        </p>
      </div>
      <a href="{{ route('product_transactions.index') }}" class="inline-flex w-max text-white font-bold text-base bg-primary rounded-full px-[30px] py-3 justify-center items-center whitespace-nowrap">
        My Orders
      </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if ("Notification" in window && Notification.permission !== "denied") {
                Notification.requestPermission().then(permission => {
            if (permission === "granted") {
                new Notification("✅ Checkout Berhasil!", {
                    body: "Pesanan kamu sedang diproses oleh staf kami.",
                    icon: "{{ asset('assets/svgs/logo-mark.svg') }}",
            });
        }
      });
    }
  });
</script>
  </body>

</html>