<div class="d-flex justify-content-center">
    <div class="sf-3164-debit-card sf-3164-debit-card-front m-2">
        <div class="sf-3164-card-header">
            <span class="sf-3164-card-title h4">Debit Card</span>
            <h4 class="sf-3164-bank-name">Bank Name</h4>
        </div>
        <div class="sf-3164-card-content">
            <div class="sf-3164-card-chip-image">
                <span class="sf-3164-card-chip-image"></span>
            </div>
            <h2 class="sf-3164-card-number mt-2 fw-bold">2233 4455 6700 0133</h2>
            <div class="sf-3164-card-validity mt-2">
                <span>VALID THRU</span>
                <h4 class="sf-3164-card-validity-date">01/22</h4>
            </div>
            <h2 class="sf-3164-card-user-name">KRUNALSINH VAGHELA</h2>
        </div>
    </div>
    <div class="sf-3164-debit-card sf-3164-debit-card-back m-2">
        <div class="sf-3164-info-strip"></div>
        <div class="sf-3164-cvv-strip">
            <span class="sf-3164-cvv-code">223</span>
        </div>
        <div class="sf-3164-card-text-desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae fringilla urna. Nullam id eleifend arcu.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae fringilla urna. Nullam id eleifend arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae fringilla urna. Nullam id eleifend arcu.</p>
        </div>
    </div>
</div>

@push('CSS')
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;700&display=swap');

		.sf-3164-app-card-container {
			position: relative;
			z-index: 1;
			display: flex;
			width: 100%;
			max-width: 1230px;
			padding: 0 15px;
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
			gap: 30px;
			min-height: 1px;
		}

		.sf-3164-app-card {
			box-shadow: 20px 30px 50px rgba(0, 0, 0, 0.5);
			background-color: rgba(255, 255, 255, 0.1);
			border-radius: 15px;
			display: flex;
			height: 400px;
			align-items: center;
			border-top: 1px solid rgba(255, 255, 255, 0.5);
			border-left: 1px solid rgba(255, 255, 255, 0.5);
			backdrop-filter: blur(5px);
			overflow: hidden;
		}

		.sf-3164-app-card .inner-wrapper {
			position: relative;
			padding: 15px;
			text-align: center;
			transition: 0.5s;
			transform: translateY(100px);
			opacity: 0;
		}

		.sf-3164-app-card:hover .inner-wrapper {
			transform: translateY(0px);
			opacity: 1;
		}

		.sf-3164-app-card .sf-3164-card-colunt {
			font-size: 8em;
			position: absolute;
			right: 30px;
			top: -50px;
			color: rgba(255, 255, 255, 0.05);
			pointer-events: none;
		}

		.sf-3164-app-card .sf-3164-card-title {
            font-weight: bold;
			color: #fff;
		}

		.sf-3164-app-card .sf-3164-card-desc {
			font-size: 1em;
			color: #fff;
		}

		.sf-3164-app-card a {
			display: inline-block;
			padding: 8px 15px;
			background: #fff;
			color: #000;
			margin-top: 15px;
			border-radius: 23px;
			font-weight: 500;
			text-decoration: none;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
		}

		.sf-3164-debit-card {
			position: relative;
			overflow: hidden;
			box-shadow: 20px 30px 50px rgba(0, 0, 0, 0.5);
            background-color: #05022b;
            opacity: 0.9;
			border-radius: 15px;
			height: 250px;
			width: 400px;
			border-top: 1px solid rgba(255, 255, 255, 0.5);
			border-left: 1px solid rgba(255, 255, 255, 0.5);
			backdrop-filter: blur(5px);
			overflow: hidden;
			z-index: 1;
		}

		.sf-3164-card-header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			flex-wrap: wrap;
			gap: 15px;
			margin-bottom: 15px;
			padding: 9px 18px 0;
		}

		.sf-3164-card-header .sf-3164-card-title,
		.sf-3164-card-header .sf-3164-bank-name {
			font-size: 15px;
			font-weight: bolder;
			color: #fff;
		}

		.sf-3164-card-header .sf-3164-bank-name {
			font-style: italic;
		}

		.sf-3164-card-content {
			position: absolute;
			padding: 9px 18px;
			left: 0;
			bottom: 0;
			width: 100%;
		}

		.sf-3164-card-number {
            font-size: 22px;
			color: #fff;
			word-spacing: 2px;
			letter-spacing: 3px;
		}

		.sf-3164-card-validity {
			display: flex;
			font-size: 14px;
			color: #fff;
			gap: 9px;
			padding-top: 10px;
			align-items: center;
			justify-content: center;
		}

		.sf-3164-card-validity span {
			font-size: 7px;
			font-weight: 400;
			max-width: 30px;
			line-height: 10px;
			letter-spacing: 2px;
		}

		.sf-3164-card-validity-date {
			font-size: 22px;
			font-weight: 700;
		}

		.sf-3164-card-user-name {
			color: #fff;
			padding-top: 11px;
			letter-spacing: 3px;
			word-spacing: 9px;
			font-size: 16px;
		}

		.sf-3164-info-strip {
			height: 38px;
			background-color: #000;
			margin-top: 23px;
			margin-bottom: 15px;
		}

		.sf-3164-cvv-strip {
			height: 27px;
			background-color: #fff;
			width: 91%;
			margin-inline: auto;
			display: flex;
			align-items: center;
			justify-content: flex-end;
			padding-right: 11px;
			border-radius: 5px;
			font-size: 11px;
			color: #ff450d;
			background: repeating-linear-gradient(0deg,
					#bff0ff,
					#bff0ff 3px,
					#fff 3px,
					#fff 7px);
		}

		.sf-3164-cvv-strip span {
			background-color: #fff;
			padding: 2px 4px;
			border-radius: 3px;
		}

		.sf-3164-card-text-desc {
			color: #fff;
			font-size: 10px;
			text-align: center;
			padding: 20px 10px 0;
			display: flex;
			flex-direction: column;
			gap: 11px;
		}

		.sf-3164-card-chip-image {
			display: inline-block;
			height: 30px;
			aspect-ratio: 125/56;
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 125 56' height='56' width='125'%3E%3Crect width='62.774' height='47.531' x='.613' y='.613' fill='%23DDD9D6' stroke='%23666' stroke-width='1.226' rx='9.195'/%3E%3Cpath fill='%23666' fill-rule='evenodd' d='M40.995 10.704c-2.187-4.368-5.623-7.798-7.883-9.138A.651.651 0 0 1 33.764.44c2.96 1.736 6.403 5.72 8.377 9.655a.61.61 0 0 1-.287.89.61.61 0 0 1-.286.073.638.638 0 0 1-.573-.353Zm-19.8 20.9c.043 6.055 5.74 13.274 9.663 15.607a.608.608 0 0 1 .225.877.651.651 0 0 1-.554.317.61.61 0 0 1-.323-.091c-4.186-2.467-9.912-9.68-10.278-16.137H.64a.646.646 0 0 1 0-1.285h19.41a23.754 23.754 0 0 0 0-13.037H.64a.64.64 0 1 1 0-1.279h19.288c.366-6.482 6.117-13.67 10.278-16.137a.651.651 0 0 1 .652 1.127c-3.924 2.303-9.62 9.528-9.663 15.589a25.46 25.46 0 0 1 0 14.45Zm42.165-.712H43.914a23.754 23.754 0 0 1 0-13.037H63.36a.64.64 0 1 0 0-1.279H43.42a.64.64 0 0 0-.61.47 25.471 25.471 0 0 0 0 14.558c-.042 6.056-5.738 13.274-9.662 15.607a.61.61 0 0 0-.25.877.65.65 0 0 0 .555.317.609.609 0 0 0 .323-.091c4.161-2.437 9.912-9.68 10.278-16.137H63.36a.645.645 0 0 0 0-1.285ZM31.348 3.928a1.146 1.146 0 1 1 1.273 1.905 1.146 1.146 0 0 1-1.273-1.905Z' clip-rule='evenodd'/%3E%3Cpath fill='%23DDD9D6' d='M92.42 19.39a2.145 2.145 0 1 1 3.45-2.549 12.587 12.587 0 0 1 2.497 7.553 12.588 12.588 0 0 1-2.496 7.543 2.145 2.145 0 1 1-3.451-2.55 8.299 8.299 0 0 0 1.216-2.297c.3-.867.457-1.778.462-2.696a8.393 8.393 0 0 0-.43-2.685 8.3 8.3 0 0 0-1.248-2.319Zm7.343-3.997a17.017 17.017 0 0 1 2.538 9.001 17.027 17.027 0 0 1-2.517 8.99 2.146 2.146 0 0 0 3.65 2.256 21.215 21.215 0 0 0 3.147-11.246 21.223 21.223 0 0 0-3.147-11.256 2.15 2.15 0 0 0-1.332-.96 2.144 2.144 0 0 0-2.61 2.431c.044.278.144.545.292.784h-.021Zm7.815-4.038a25.908 25.908 0 0 1 3.535 13.081 25.89 25.89 0 0 1-3.535 13.07 2.146 2.146 0 1 0 3.703 2.172 30.016 30.016 0 0 0 4.123-15.231 30.129 30.129 0 0 0-4.113-15.295 2.157 2.157 0 0 0-2.958-.755 2.161 2.161 0 0 0-.755 2.958Zm7.784-4.091a34.546 34.546 0 0 1 4.531 17.172 34.53 34.53 0 0 1-4.531 17.162 2.139 2.139 0 0 0 .813 2.911 2.13 2.13 0 0 0 1.624.196 2.128 2.128 0 0 0 1.287-1.009 38.895 38.895 0 0 0 5.098-19.291 38.917 38.917 0 0 0-5.098-19.344 2.137 2.137 0 1 0-3.724 2.098'/%3E%3C/svg%3E");
		}
	</style>
@endpush


@push('JS')
    <script>
        document.addEventListener('DOMContentLoaded', ()=>{
            VanillaTilt.init(document.querySelectorAll(".sf-3164-debit-card"),{
                max: 25,
                speed: 400,
                glare: true,
                'max-glare': 1
            });
        });
    </script>
@endpush