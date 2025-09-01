@extends('layouts.app')

<style>

    <style>
      .form-input {
        transition: all 0.2s ease;
      }
      .form-input:focus {
        outline: none;
        border-color: #ffb300;
        box-shadow: 0 0 0 3px rgba(255, 179, 0, 0.1);
      }
      .payment-option {
        transition: all 0.2s ease;
      }
      .payment-option:hover {
        border-color: #ffb300;
        box-shadow: 0 0 0 1px rgba(255, 179, 0, 0.2);
      }
      .payment-option.selected {
        border-color: #ffb300;
        background-color: rgba(255, 179, 0, 0.05);
      }
      .radio-dot {
        transition: all 0.2s ease;
      }
      body {
        font-family: "Inter", sans-serif;
      }
    </style>

@section('content')
<!-- Checkout Payments Page Content Start -->
    <main class="my-32">
      <div class="main-container mx-auto">
        <!-- Progress Steps -->
        <div class="mb-8">
          <div class="relative w-full max-w-2xl mx-auto flex items-center justify-center" style="height: 70px">
            <!-- Connector Line -->
            <div class="absolute left-0 right-0 top-[18px] h-1 bg-primary z-0" style="left: 14%; right: 14%"></div>
            <!-- Step 1 -->
            <div class="flex flex-col items-center flex-1 z-10">
              <div class="w-9 h-9 rounded-full flex items-center justify-center font-semibold text-sm bg-primary text-gray-800 shadow">1</div>
              <span class="text-sm font-medium text-center text-gray-800 mt-2">Activity</span>
            </div>
            <!-- Step 2 -->
            <div class="flex flex-col items-center flex-1 z-10">
              <div class="w-9 h-9 rounded-full flex items-center justify-center font-semibold text-sm bg-primary text-gray-800 shadow">2</div>
              <span class="text-sm font-medium text-center text-gray-800 mt-2">Contact</span>
            </div>
            <!-- Step 3 -->
            <div class="flex flex-col items-center flex-1 z-10">
              <div class="w-9 h-9 rounded-full flex items-center justify-center font-semibold text-sm bg-primary text-gray-800 shadow">3</div>
              <span class="text-sm font-medium text-center text-gray-800 mt-2">Payment</span>
            </div>
          </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          <!-- Left Column - Payment Section -->
          <div class="lg:col-span-2">
            <!-- Security Message -->
            <div class="bg-[#05E959] bg-opacity-50 border rounded-lg p-4 w-[335px] mb-4">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 16 11" fill="none">
                    <path
                      d="M1 3H15M1 3.5H15M3.15385 7H7.46154M3.15385 8.5H5.30769M2.61538 10.5H13.3846C13.813 10.5 14.2239 10.342 14.5269 10.0607C14.8298 9.77936 15 9.39782 15 9V2C15 1.60218 14.8298 1.22064 14.5269 0.93934C14.2239 0.658035 13.813 0.5 13.3846 0.5H2.61538C2.18696 0.5 1.77608 0.658035 1.47314 0.93934C1.17019 1.22064 1 1.60218 1 2V9C1 9.39782 1.17019 9.77936 1.47314 10.0607C1.77608 10.342 2.18696 10.5 2.61538 10.5Z"
                      stroke="#016024"
                      stroke-width="0.8"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="ml-3">
                  <p class="text-sm font-medium text-[#016024]">Secure your booking with 50% upfront.</p>
                </div>
              </div>
            </div>

            <!-- Currency Selection -->
            <div class="bg-white rounded-lg border border-gray-200 p-6 mb-6">
              <h2 class="text-xl font-semibold text-gray-800 mb-2">Choose your currency</h2>
              <p class="text-sm text-gray-600 mb-6">Pay in your usual currency to avoid possible exchange rate fees from your bank.</p>

              <div class="space-y-3" id="currency-options">
                <div class="flex items-center p-4 border-2 border-primary rounded-lg cursor-pointer payment-option selected bg-yellow-50" data-currency="USD" onclick="selectCurrency('USD')">
                  <div class="w-5 h-5 rounded-full border-2 border-primary mr-4 flex items-center justify-center">
                    <div class="w-3 h-3 rounded-full bg-primary radio-dot"></div>
                  </div>
                  <span class="font-medium text-gray-800">USD $2.00</span>
                </div>

                <div class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer payment-option hover:border-primary" data-currency="IDR" onclick="selectCurrency('IDR')">
                  <div class="w-5 h-5 rounded-full border-2 border-gray-300 mr-4 flex items-center justify-center">
                    <div class="w-3 h-3 rounded-full radio-dot"></div>
                  </div>
                  <span class="font-medium text-gray-800">IDR 33,857</span>
                </div>
              </div>
            </div>

            <!-- Payment Method Selection -->
            <div class="bg-white rounded-lg border border-gray-200 p-6 mb-6">
              <h2 class="text-xl font-semibold text-gray-800 mb-2">Select a payment method</h2>
              <div class="flex items-center text-sm text-green-600 mb-6">
                <span>🔒 Payments are secure and encrypted</span>
              </div>

              <div class="space-y-4" id="payment-methods">
                <!-- PayPal Option -->
                <div class="border-2 border-primary rounded-lg payment-option selected bg-yellow-50" data-payment="paypal">
                  <div class="flex items-center p-4 cursor-pointer" onclick="selectPaymentMethod('paypal')">
                    <div class="w-5 h-5 rounded-full border-2 border-primary mr-4 flex items-center justify-center">
                      <div class="w-3 h-3 rounded-full bg-primary radio-dot"></div>
                    </div>
                    <span class="font-medium text-gray-800 flex-grow">PayPal</span>
                    <div class="text-right">
                      <span class="text-blue-600 font-bold">PayPal</span>
                    </div>
                  </div>
                  <div class="px-4 pb-4" id="paypal-details">
                    <p class="text-sm text-gray-600 mb-4">You will be redirected to PayPal to complete payment.</p>
                    <div class="text-xs text-gray-500 mb-4">
                      <p>
                        By continuing, you agree to <a href="#" class="text-blue-600 underline">GetYourGuide's general terms and conditions</a>. Read more on the <a href="#" class="text-blue-600 underline">right of withdrawal</a> and
                        information on the applicable <a href="#" class="text-blue-600 underline">travel law</a>.
                      </p>
                    </div>
                    <button class="w-full bg-primary hover:bg-yellow-500 text-gray-800 font-semibold py-3 px-4 rounded-lg transition-colors" onclick="processPayPal()">Pay with PayPal</button>
                  </div>
                </div>

                <!-- Google Pay Option -->
                <div class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer payment-option hover:border-primary" data-payment="google_pay" onclick="selectPaymentMethod('google_pay')">
                  <div class="w-5 h-5 rounded-full border-2 border-gray-300 mr-4 flex items-center justify-center">
                    <div class="w-3 h-3 rounded-full radio-dot"></div>
                  </div>
                  <span class="font-medium text-gray-800 flex-grow">Google Pay</span>
                  <div class="text-right">
                    <span class="text-gray-400 text-sm">G Pay</span>
                  </div>
                </div>

                <!-- Credit/Debit Card Option -->
                <div class="payment-option border-2 border-gray-200 rounded-lg hover:border-primary" data-payment="card">
                  <div class="flex items-center p-4 cursor-pointer" onclick="selectPaymentMethod('card')">
                    <div class="w-5 h-5 rounded-full border-2 border-gray-300 mr-4 flex items-center justify-center">
                      <div class="w-3 h-3 rounded-full radio-dot"></div>
                    </div>
                    <span class="font-medium text-gray-800 flex-grow">Debit or credit card</span>
                    <div class="text-right">
                      <span class="text-gray-400 text-sm">💳</span>
                    </div>
                  </div>

                  <!-- Card Form (Hidden by default) -->
                  <div class="px-4 pb-4 hidden" id="card-form">
                    <div class="space-y-4">
                      <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Card Number</label>
                        <input type="text" placeholder="1234 5678 9012 3456" class="w-full p-3 border border-gray-300 rounded-lg form-input" maxlength="19" oninput="formatCardNumber(this)" />
                      </div>
                      <div class="grid grid-cols-2 gap-4">
                        <div>
                          <label class="block text-sm font-medium text-gray-700 mb-1">Expiry Date</label>
                          <input type="text" placeholder="MM/YY" class="w-full p-3 border border-gray-300 rounded-lg form-input" maxlength="5" oninput="formatExpiryDate(this)" />
                        </div>
                        <div>
                          <label class="block text-sm font-medium text-gray-700 mb-1">CVV</label>
                          <input type="text" placeholder="123" class="w-full p-3 border border-gray-300 rounded-lg form-input" maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'')" />
                        </div>
                      </div>
                      <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Cardholder Name</label>
                        <input type="text" placeholder="John Doe" class="w-full p-3 border border-gray-300 rounded-lg form-input" />
                      </div>
                      <button class="w-full bg-primary hover:bg-yellow-500 text-gray-800 font-semibold py-3 px-4 rounded-lg transition-colors" onclick="processCard()">Pay with Card</button>
                    </div>
                  </div>
                </div>

                <!-- Google Pay Form (Hidden by default) -->
                <div class="px-4 pb-4 hidden" id="google-pay-details">
                  <p class="text-sm text-gray-600 mb-4">Complete your payment using Google Pay.</p>
                  <button class="w-full bg-gray-800 hover:bg-gray-900 text-white font-semibold py-3 px-4 rounded-lg transition-colors flex items-center justify-center gap-2" onclick="processGooglePay()">
                    <span>G</span> Pay with Google Pay
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Column - Order Summary -->
          <div class="lg:col-span-1">
            <div class="bg-white rounded-lg border sticky top-8">
              <h2 class="text-lg md:text-xl font-semibold text-secondary mb-4 px-4 pt-4">Order summary</h2>

              <!-- Activity Card with Image and Rating -->
              <div class="border-t border-b p-3 md:p-4 mb-4">
                <div class="flex items-start space-x-3">
                  <div class="flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&h=80&q=80" alt="Borobudur Temple" class="w-16 h-16 md:w-20 md:h-20 rounded-lg object-cover" />
                  </div>
                  <div class="flex-1 min-w-0">
                    <h3 class="font-semibold text-secondary text-sm md:text-base leading-tight mb-2">Yogyakarta: Borobudur Sunset Climb Up Shared Guided Tour</h3>

                    <!-- Rating -->
                    <div class="flex items-center mb-2">
                      <div class="flex items-center">
                        <!-- Rating -->
                        <div class="flex items-center gap-2 mb-2">
                          <div class="flex items-center space-x-0.5">
                            <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                            <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                            <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                            <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                            <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          </div>
                          <p class="text-sm text-secondary">4.9 <span class="text-[#6A6A6B]">(870)</span></p>
                        </div>
                      </div>
                    </div>

                    <!-- Top rated badge -->
                    <span class="inline-block bg-secondary text-primary text-xs font-semibold px-2 py-1 rounded">Top rated</span>
                  </div>
                </div>
              </div>

              <!-- Activity Details -->
              <div class="space-y-4 mb-4 px-4">
                <div class="flex items-start text-sm space-x-2.5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34" viewBox="0 0 25 24" fill="none">
                    <path
                      d="M17.1904 6V6.75M17.1904 9.75V10.5M17.1904 13.5V14.25M17.1904 17.25V18M8.19043 12.75H13.4404M8.19043 15H11.1904M4.06543 5.25C3.44443 5.25 2.94043 5.754 2.94043 6.375V9.401C3.39718 9.66398 3.77655 10.0427 4.04035 10.4989C4.30414 10.9552 4.44303 11.473 4.44303 12C4.44303 12.527 4.30414 13.0448 4.04035 13.5011C3.77655 13.9573 3.39718 14.336 2.94043 14.599V17.625C2.94043 18.246 3.44443 18.75 4.06543 18.75H21.3154C21.9364 18.75 22.4404 18.246 22.4404 17.625V14.599C21.9837 14.336 21.6043 13.9573 21.3405 13.5011C21.0767 13.0448 20.9378 12.527 20.9378 12C20.9378 11.473 21.0767 10.9552 21.3405 10.4989C21.6043 10.0427 21.9837 9.66398 22.4404 9.401V6.375C22.4404 5.754 21.9364 5.25 21.3154 5.25H4.06543Z"
                      stroke="#202020"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <div>
                    <div class="text-sm font-semibold text-secondary">Yogyakarta: Borobudur Sunset Climb Up Non Tickets <span class="text-sm font-semibold text-secondary">• Language: English</span></div>
                  </div>
                </div>

                <div class="flex items-center text-sm space-x-2.5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path
                      d="M12.6904 6V12H17.1904M21.6904 12C21.6904 13.1819 21.4576 14.3522 21.0053 15.4442C20.5531 16.5361 19.8901 17.5282 19.0544 18.364C18.2187 19.1997 17.2265 19.8626 16.1346 20.3149C15.0427 20.7672 13.8723 21 12.6904 21C11.5085 21 10.3382 20.7672 9.24628 20.3149C8.15435 19.8626 7.1622 19.1997 6.32647 18.364C5.49074 17.5282 4.82781 16.5361 4.37551 15.4442C3.92322 14.3522 3.69043 13.1819 3.69043 12C3.69043 9.61305 4.63864 7.32387 6.32647 5.63604C8.0143 3.94821 10.3035 3 12.6904 3C15.0774 3 17.3666 3.94821 19.0544 5.63604C20.7422 7.32387 21.6904 9.61305 21.6904 12Z"
                      stroke="#202020"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <span class="text-sm font-semibold text-secondary">Wednesday, August 20, 2025 at 12:30 PM</span>
                </div>

                <div class="flex items-center space-x-2.5 text-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path
                      d="M15.6905 19.128C16.5434 19.3757 17.4273 19.5009 18.3155 19.5C19.7439 19.5021 21.1537 19.1764 22.4365 18.548C22.4744 17.6517 22.2191 16.7675 21.7092 16.0293C21.1994 15.2912 20.4628 14.7394 19.6112 14.4575C18.7595 14.1757 17.8391 14.1791 16.9896 14.4674C16.1401 14.7557 15.4077 15.313 14.9035 16.055M15.6905 19.128V19.125C15.6905 18.012 15.4045 16.965 14.9035 16.055M15.6905 19.128V19.234C13.7659 20.3931 11.5611 21.0038 9.31445 21C6.98345 21 4.80245 20.355 2.94045 19.234L2.93945 19.125C2.93869 17.7095 3.40907 16.3339 4.27644 15.2153C5.14381 14.0966 6.35883 13.2984 7.72994 12.9466C9.10106 12.5948 10.5503 12.7093 11.8491 13.2721C13.148 13.8349 14.2225 14.814 14.9035 16.055M12.6905 6.375C12.6905 7.27011 12.3349 8.12855 11.7019 8.76149C11.069 9.39442 10.2106 9.75 9.31545 9.75C8.42035 9.75 7.5619 9.39442 6.92897 8.76149C6.29603 8.12855 5.94045 7.27011 5.94045 6.375C5.94045 5.47989 6.29603 4.62145 6.92897 3.98851C7.5619 3.35558 8.42035 3 9.31545 3C10.2106 3 11.069 3.35558 11.7019 3.98851C12.3349 4.62145 12.6905 5.47989 12.6905 6.375ZM20.9405 8.625C20.9405 9.32119 20.6639 9.98887 20.1716 10.4812C19.6793 10.9734 19.0116 11.25 18.3155 11.25C17.6193 11.25 16.9516 10.9734 16.4593 10.4812C15.967 9.98887 15.6905 9.32119 15.6905 8.625C15.6905 7.92881 15.967 7.26113 16.4593 6.76884C16.9516 6.27656 17.6193 6 18.3155 6C19.0116 6 19.6793 6.27656 20.1716 6.76884C20.6639 7.26113 20.9405 7.92881 20.9405 8.625Z"
                      stroke="#202020"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <span class="text-sm font-semibold text-secondary">1 adult (Age 0 - 99)</span>
                </div>

                <!-- Change Details Button -->
                <div class="border-b border-gray-200 pb-4 mb-4">
                  <button class="text-sm text-secondary hover:text-primary underline space-x-2.5 flex items-center transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 14 14" fill="none">
                      <g clip-path="url(#clip0_2194_3231)">
                        <path
                          d="M9.83617 2.61756L10.8203 1.63289C11.0254 1.42775 11.3036 1.3125 11.5938 1.3125C11.8839 1.3125 12.1621 1.42775 12.3673 1.63289C12.5724 1.83804 12.6876 2.11628 12.6876 2.40639C12.6876 2.69651 12.5724 2.97475 12.3673 3.17989L3.98533 11.5618C3.67694 11.87 3.29663 12.0966 2.87875 12.221L1.3125 12.6876L1.77917 11.1214C1.90358 10.7035 2.13012 10.3232 2.43833 10.0148L9.83675 2.61756H9.83617ZM9.83617 2.61756L11.375 4.15639"
                          stroke="#202020"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_2194_3231">
                          <rect width="14" height="14" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    <span class="text-sm font-semibold underline-offset-2 text-secondary">Change date or participants</span>
                  </button>
                </div>
              </div>

              <!-- Payment Features -->
              <div class="space-y-3 mb-4 px-4">
                <!-- Pay Fully Option -->
                <div class="flex items-start">
                  <div class="flex items-center h-5 mt-0.5">
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path
                          d="M9.69043 12.75L11.9404 15L15.6904 9.75M21.6904 12C21.6904 13.1819 21.4576 14.3522 21.0053 15.4442C20.5531 16.5361 19.8901 17.5282 19.0544 18.364C18.2187 19.1997 17.2265 19.8626 16.1346 20.3149C15.0427 20.7672 13.8723 21 12.6904 21C11.5085 21 10.3382 20.7672 9.24628 20.3149C8.15435 19.8626 7.1622 19.1997 6.32647 18.364C5.49074 17.5282 4.82781 16.5361 4.37551 15.4442C3.92322 14.3522 3.69043 13.1819 3.69043 12C3.69043 9.61305 4.63864 7.32387 6.32647 5.63604C8.0143 3.94821 10.3035 3 12.6904 3C15.0774 3 17.3666 3.94821 19.0544 5.63604C20.7422 7.32387 21.6904 9.61305 21.6904 12Z"
                          stroke="#1A8567"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                  <div class="ml-3">
                    <div class="text-sm font-semibold text-secondary">Pay Fully or 50% Only</div>
                    <div class="text-xs text-gray-600">Book now and pay in full or 50% upfront.</div>
                  </div>
                </div>

                <!-- Free Cancellation -->
                <div class="flex items-start">
                  <div class="flex items-center h-5 mt-0.5">
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path
                          d="M9.69043 12.75L11.9404 15L15.6904 9.75M21.6904 12C21.6904 13.1819 21.4576 14.3522 21.0053 15.4442C20.5531 16.5361 19.8901 17.5282 19.0544 18.364C18.2187 19.1997 17.2265 19.8626 16.1346 20.3149C15.0427 20.7672 13.8723 21 12.6904 21C11.5085 21 10.3382 20.7672 9.24628 20.3149C8.15435 19.8626 7.1622 19.1997 6.32647 18.364C5.49074 17.5282 4.82781 16.5361 4.37551 15.4442C3.92322 14.3522 3.69043 13.1819 3.69043 12C3.69043 9.61305 4.63864 7.32387 6.32647 5.63604C8.0143 3.94821 10.3035 3 12.6904 3C15.0774 3 17.3666 3.94821 19.0544 5.63604C20.7422 7.32387 21.6904 9.61305 21.6904 12Z"
                          stroke="#1A8567"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                  <div class="ml-3">
                    <div class="text-sm font-semibold text-secondary">Free Cancellation</div>
                    <div class="text-xs text-gray-600">Cancel anytime until H-1 of your trip</div>
                  </div>
                </div>
              </div>

              <!-- Promo Code -->
              <div class="border-t border-gray-200 pt-4 mb-4">
                <button class="text-sm px-4 text-secondary hover:text-primary space-x-2.5 underline flex items-center transition-colors">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 15 15" fill="none">
                      <g clip-path="url(#clip0_2202_3429)">
                        <path
                          d="M12.75 7.0625V11.875C12.75 12.1071 12.6578 12.3296 12.4937 12.4937C12.3296 12.6578 12.1071 12.75 11.875 12.75H3.5625C3.33044 12.75 3.10788 12.6578 2.94378 12.4937C2.77969 12.3296 2.6875 12.1071 2.6875 11.875V7.0625M7.5 3.34375C7.5 3.0409 7.41019 2.74485 7.24194 2.49303C7.07368 2.24122 6.83453 2.04496 6.55473 1.92906C6.27493 1.81316 5.96705 1.78284 5.67002 1.84192C5.37298 1.90101 5.10014 2.04684 4.88599 2.26099C4.67184 2.47514 4.52601 2.74799 4.46692 3.04502C4.40784 3.34205 4.43816 3.64994 4.55406 3.92973C4.66996 4.20953 4.86622 4.44868 5.11803 4.61694C5.36985 4.78519 5.6659 4.875 5.96875 4.875H7.5M7.5 3.34375V4.875M7.5 3.34375C7.5 3.0409 7.58981 2.74485 7.75806 2.49303C7.92632 2.24122 8.16547 2.04496 8.44527 1.92906C8.72506 1.81316 9.03295 1.78284 9.32998 1.84192C9.62701 1.90101 9.89986 2.04684 10.114 2.26099C10.3282 2.47514 10.474 2.74799 10.5331 3.04502C10.5922 3.34205 10.5618 3.64994 10.4459 3.92973C10.33 4.20953 10.1338 4.44868 9.88197 4.61694C9.63015 4.78519 9.3341 4.875 9.03125 4.875H7.5M7.5 4.875V12.75M2.46875 7.0625H12.9687C13.331 7.0625 13.625 6.7685 13.625 6.40625V5.53125C13.625 5.169 13.331 4.875 12.9687 4.875H2.46875C2.1065 4.875 1.8125 5.169 1.8125 5.53125V6.40625C1.8125 6.7685 2.1065 7.0625 2.46875 7.0625Z"
                          stroke="#202020"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_2202_3429">
                          <rect width="14" height="14" fill="white" transform="translate(0.5 0.5)" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <p class="text-sm font-semibold underline-offset-2 text-secondary">Enter promo, credit, or gift code</p>
                </button>
              </div>

              <!-- Total Section -->
              <div class="bg-secondary text-primary rounded-b-lg p-4">
                <div class="flex justify-between items-center">
                  <span class="text-xl font-semibold text-primary">Total</span>
                  <span class="text-xl font-semibold">$28.75</span>
                </div>
                <div class="text-xs text-primary mt-1 text-right">All taxes and fees included</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<!-- Checkout Payments Page Content End -->
@push('scripts')
    <script>
      // Global variables
      let selectedCurrency = "USD";
      let selectedPaymentMethod = "paypal";

      // Currency selection function
      function selectCurrency(currency) {
        selectedCurrency = currency;

        // Remove selected class from all currency options
        document.querySelectorAll("#currency-options .payment-option").forEach((option) => {
          option.classList.remove("selected", "bg-yellow-50", "border-primary");
          option.classList.add("border-gray-200");

          // Reset radio button
          const radioBtn = option.querySelector(".radio-dot");
          const radioBorder = radioBtn.parentElement;
          radioBtn.classList.remove("bg-primary");
          radioBorder.classList.remove("border-primary");
          radioBorder.classList.add("border-gray-300");
        });

        // Add selected class to chosen option
        const selectedOption = document.querySelector(`[data-currency="${currency}"]`);
        selectedOption.classList.add("selected", "bg-yellow-50", "border-primary");
        selectedOption.classList.remove("border-gray-200");

        // Update radio button
        const radioBtn = selectedOption.querySelector(".radio-dot");
        const radioBorder = radioBtn.parentElement;
        radioBtn.classList.add("bg-primary");
        radioBorder.classList.remove("border-gray-300");
        radioBorder.classList.add("border-primary");

        // Update total price based on currency
        updateTotalPrice();

        console.log("Selected currency:", currency);
      }

      // Payment method selection function
      function selectPaymentMethod(method) {
        selectedPaymentMethod = method;

        // Hide all payment details
        document.getElementById("paypal-details").style.display = "none";
        document.getElementById("card-form").classList.add("hidden");
        document.getElementById("google-pay-details").classList.add("hidden");

        // Remove selected class from all payment options
        document.querySelectorAll("#payment-methods .payment-option").forEach((option) => {
          option.classList.remove("selected", "bg-yellow-50", "border-primary");
          option.classList.add("border-gray-200");

          // Reset radio button
          const radioBtn = option.querySelector(".radio-dot");
          const radioBorder = radioBtn.parentElement;
          radioBtn.classList.remove("bg-primary");
          radioBorder.classList.remove("border-primary");
          radioBorder.classList.add("border-gray-300");
        });

        // Add selected class to chosen option
        const selectedOption = document.querySelector(`[data-payment="${method}"]`);
        selectedOption.classList.add("selected", "bg-yellow-50", "border-primary");
        selectedOption.classList.remove("border-gray-200");

        // Update radio button
        const radioBtn = selectedOption.querySelector(".radio-dot");
        const radioBorder = radioBtn.parentElement;
        radioBtn.classList.add("bg-primary");
        radioBorder.classList.remove("border-gray-300");
        radioBorder.classList.add("border-primary");

        // Show appropriate payment details
        switch (method) {
          case "paypal":
            document.getElementById("paypal-details").style.display = "block";
            break;
          case "card":
            document.getElementById("card-form").classList.remove("hidden");
            break;
          case "google_pay":
            document.getElementById("google-pay-details").classList.remove("hidden");
            // Move google pay details to the right place
            const googlePayOption = document.querySelector(`[data-payment="google_pay"]`);
            googlePayOption.appendChild(document.getElementById("google-pay-details"));
            document.getElementById("google-pay-details").classList.remove("hidden");
            break;
        }

        console.log("Selected payment method:", method);
      }

      // Update total price based on selected currency
      function updateTotalPrice() {
        const totalElement = document.getElementById("total-price");
        if (selectedCurrency === "USD") {
          totalElement.textContent = "$28.75";
        } else if (selectedCurrency === "IDR") {
          totalElement.textContent = "IDR 487,106";
        }
      }

      // Card number formatting
      function formatCardNumber(input) {
        let value = input.value.replace(/\s/g, "").replace(/[^0-9]/gi, "");
        let formattedValue = value.match(/.{1,4}/g)?.join(" ") || value;
        input.value = formattedValue;
      }

      // Expiry date formatting
      function formatExpiryDate(input) {
        let value = input.value.replace(/\D/g, "");
        if (value.length >= 2) {
          value = value.substring(0, 2) + "/" + value.substring(2, 4);
        }
        input.value = value;
      }

      // Payment processing functions
      function processPayPal() {
        alert(`Processing PayPal payment of ${document.getElementById("total-price").textContent}...`);
        // Here you would integrate with PayPal SDK
      }

      function processCard() {
        alert(`Processing card payment of ${document.getElementById("total-price").textContent}...`);
        // Here you would integrate with your card payment processor
      }

      function processGooglePay() {
        alert(`Processing Google Pay payment of ${document.getElementById("total-price").textContent}...`);
        // Here you would integrate with Google Pay SDK
      }

      // Initialize the form
      document.addEventListener("DOMContentLoaded", function () {
        // Set initial selections
        selectCurrency("USD");
        selectPaymentMethod("paypal");

        console.log("Payment form initialized successfully");
      });
    </script>
@endpush
@endsection
