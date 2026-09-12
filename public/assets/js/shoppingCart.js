// addToCart
let originalHtml

function addToCart(el, proId) {
   originalHtml = el.innerHTML
   el.innerHTML =
      `<div class="w-5 h-5 border-2 border-gray-200 border-t-[#d5a743] rounded-full animate-spin"></div>`
   if (flag) {
      $.ajax({
         url: link + "api/cart/store",
         type: "POST",
         dataType: "json",
         data: {
            'product_id': proId,
            'user_id': userId
         },
         success: function (data) {
            console.log(data)
            orderBasket.parentElement.classList.remove('hidden')
            orderBasket.parentElement.classList.add('flex')
            orderBasket.children[1].innerText++
            el.innerHTML = `
                                <div class="w-10/12 h-full flex flex-row gap-2 items-center justify-between px-1 count">
                                    <button class="size-7 pt-1 bg-[#f6911e] flex justify-center items-center rounded-md changeButton cursor-pointer" onclick="setCount(this, '+', ${data.product_id})">
                                        <span class="text-2xl text-white">+</span>
                                    </button>
                                    <input type="number" disabled min="1" value="${data.quantity}" class="size-7 text-center font-bold text-xs text-white outline-none" name="" id="quantity">
                                    <button class="size-7 pt-1 bg-[#f6911e] flex justify-center items-center rounded-md changeButton cursor-pointer" onclick="setCount(this, '-', ${data.product_id})">
                                        <span class='text-2xl text-white'>-</span>
                                    </button>
                                </div>`
            message.children[0].innerHTML = ''
            showMessage('open')
            let msgElement = document.createElement('div')
            msgElement.classList =
               "text-sm font-bold flex flex-row items-center justify-center py-3 gap-2 lg:gap-3"
            msgElement.innerHTML = `
                                <span>✅</span>
                                <span>محصول به سبد خرید اضافه شد</span>`
            message.children[0].appendChild(msgElement)
            setTimeout(() => {
               showMessage('close')
            }, 2000)
         },
         error: function () {
            console.log('addToCart error')
            el.innerHTML = originalHtml;
            showMessage('open')
            let msgElement = document.createElement('div')
            msgElement.classList =
               "text-sm font-bold flex flex-row items-center justify-center py-3 gap-2 lg:gap-3"
            msgElement.innerHTML = `
                            <span class="text-red-500">!</span>
                            <span>خطا در افزودن به سبد خرید</span>`
            message.children[0].appendChild(msgElement)
            setTimeout(() => {
               showMessage('close')
            }, 2000)
         }
      })
   } else {
      authenticationDiv.classList.remove('invisible')
      authenticationDiv.classList.remove('opacity-0')
   }
}

function closeLoginForm() {
   authenticationDiv.classList.add('invisible', 'opacity-0')
   element.innerHTML = `
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="xl:size-6 size-4"
                        fill="white">
                        <path
                            d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                        </path>
                    </svg>
                </div>
                <span class="xl:text-md lg:text-sm text-[9px] text-white font-bold">ثبت سفارش</span>`
}

// setCount
function setCount(el, state, proId, flag = false) {
   product_id = proId
   el.parentElement.parentElement.removeAttribute('onclick')
   el.setAttribute('disabled', true)
   el.innerHTML =
      `<div class="w-5 h-5 border-2 border-white border-t-(--primary-color) rounded-full animate-spin"></div>`

   if (state == "+") {
      if (flag) {
         document.getElementById('quantity') && document.getElementById('quantity').value++
         let plusPr = el.parentElement.getAttribute('data-price')
         let pricee = document.getElementById('cartTotalPrice').innerText
         let newPrice = parseInt(pricee) + parseInt(plusPr)
         document.getElementById('cartTotalPrice').innerText = newPrice
      }
      el.parentElement.children[1].value++
      orderBasket.children[1].innerText++
   }
   if (state == "-") {
      if (flag) {
         document.getElementById('quantity') && document.getElementById('quantity').value--
         let minusPr = el.parentElement.getAttribute('data-price')
         let pricee = document.getElementById('cartTotalPrice').innerText
         let newPrice = parseInt(pricee) - parseInt(minusPr)
         document.getElementById('cartTotalPrice').innerText = newPrice
      }
      el.parentElement.children[1].value--
      orderBasket.children[1].innerText--
   }
   if (el.parentElement.children[1].value == 0) {
      document.getElementById('cartTotalPrice').innerText = 0
      $.ajax({
         url: link + "api/cart/delete",
         type: "POST",
         dataType: "json",
         data: {
            'user_id': userId,
            'product_id': proId
         },
         success: function (data) {
            message.children[0].innerHTML = ''
            if (orderBasket.children[1].innerText == 0) {
               document.getElementById('cartEmpty').classList.remove('hidden');
               document.getElementById('submitOrderBtn').disabled = true;
               document.getElementById('cancelOrderBtn').disabled = true;
               document.getElementById('cancelOrderBtn').classList.add('cursor-no-drop')
            }
            console.log(data)
            if (flag) {
               el.closest('.parentCart').remove()
               if (document.getElementById('quantity')) {
                  document.getElementById('cartBtn').setAttribute('onclick', `addToCart(this, ${proId})`)
                  document.getElementById('quantity').closest('#cartBtn').innerHTML =
                     `<div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="xl:size-6 size-4"
                                            fill="white">
                                            <path
                                                d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span class="xl:text-md lg:text-sm text-[9px] text-white font-bold">ثبت سفارش</span>`
               }
            }
            el.parentElement.parentElement.setAttribute('onclick',
               `addToCart(this , ${product_id})`)
            el.parentElement.parentElement.innerHTML = `
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="xl:size-6 size-4"
                                        fill="white">
                                        <path
                                            d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="xl:text-md lg:text-sm text-[9px] text-white font-bold">ثبت سفارش</span>`

         },
         error: function () {
            console.log('error')
         }
      })
   } else {
      $.ajax({
         url: link + 'api/cart/update',
         type: "POST",
         dataType: "json",
         data: {
            'product_id': proId,
            'quantity': el.parentElement.children[1].value,
            'user_id': userId
         },
         success: function (data) {
            console.log(data)
            el.removeAttribute('disabled')
            let currentQuantity = data.quantity || 0
            el.parentElement.children[1].value = currentQuantity
            if (state == "+") {
               el.innerHTML = "<span class='text-2xl text-white'>+</span>"
               if (data.disabled) {
                  el.classList.remove('bg-[#f6911e]')
                  el.classList.add('bg-gray-500')
                  el.innerHTML = "<span class='text-2xl text-white/50'>+</span>"
                  el.disabled = true
               }
               el.parentElement.children[2].innerHTML =
                  "<span class='text-2xl text-white'>-</span>"
            }
            if (state == "-") {
               el.innerHTML = "<span class='text-2xl text-white'>-</span>"
               if (!data.disabled) {
                  el.parentElement.children[0].classList.remove('bg-gray-500')
                  el.parentElement.children[0].classList.add('bg-[#f6911e]')
                  el.parentElement.children[0].innerHTML =
                     "<span class='text-2xl text-white'>+</span>"
                  el.parentElement.children[0].disabled = false
               }
            }
            if (el.parentElement.children[1].value == 0) {
               el.parentElement.parentElement.innerHTML = `
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="xl:size-6 size-4"
                                            fill="white">
                                            <path
                                                d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span class="xl:text-md lg:text-sm text-[9px] text-white font-bold">ثبت سفارش</span>
                            `
            }
         },
         error: function () {
            console.log('error')
         }
      })
   }

}

// تابع بستن مودال
function closeShoppingCart() {
   document.getElementById('shoppingCartModal').classList.add('hidden');
   document.body.classList.remove('overflow-hidden');

   // برگردوندن آیکون سبد خرید
   orderBasket.parentElement.classList.remove('hidden');
   orderBasket.parentElement.classList.add('flex');


}

function canceleOrder() {
   document.getElementById('shoppingCartModal').classList.add('hidden');
   document.body.classList.remove('overflow-hidden');
   document.getElementById('cartTotalPrice').innerText = 0

   // برگردوندن آیکون سبد خرید
   orderBasket.parentElement.classList.remove('hidden');
   orderBasket.parentElement.classList.add('flex');
   $.ajax({
      url: link + 'api/order/cancelAll/' + userId,
      type: 'GET',
      success: function (response) {
         console.log(response)
         message.children[0].innerHTML = ''

         if (orderBasket && orderBasket.parentElement) {
            orderBasket.children[1].innerText = 0
         }
         if (orderBasket) {
            orderBasket.children[1].innerText = '0'
         }
         if (element) {
            element.setAttribute('onclick', `addToCart(this , ${proId})`)
            element.innerHTML = `
                               <div>
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="xl:size-6 size-4"
                                       fill="white">
                                       <path
                                           d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                       </path>
                                   </svg>
                               </div>
                               <span class="xl:text-md lg:text-sm text-[9px] text-white font-bold">ثبت سفارش</span>
                       `
         }

         showMessage('open');
         let msgElement = document.createElement('div');
         msgElement.classList =
            "text-sm font-bold flex flex-row items-center justify-center py-3 gap-2 lg:gap-3";
         msgElement.innerHTML = `
                        <span>✅</span>
                        <span>سفارشات شما لغو شد</span>
                    `;
         message.children[0].appendChild(msgElement);
         setTimeout(() => {
            showMessage('close');
         }, 3000);
      },
      error: function () {
         console.log('error')
      }
   })
}

function submitOrder() {
   if (!confirm('آیا از ثبت سفارش مطمئن هستید؟')) return;

   $.ajax({
      url: link + "api/order/store",
      type: "POST",
      dataType: "json",
      data: {
         'product_id': product_id,
         'user_id': userId
      },
      success: function (data) {
         document.getElementById('cartTotalPrice').innerText = 0
         message.children[0].innerHTML = ''
         closeShoppingCart()
         let productId = null;
         if (orderBasket && orderBasket.parentElement) {
            orderBasket.children[1].innerText = 0
         }
         if (orderBasket) {
            orderBasket.children[1].innerText = '0'
         }
         data.forEach(cart => {
            productId = cart.product_id
         })
         if (element) {
            element.setAttribute('onclick', `addToCart(this , ${productId})`)
            element.innerHTML = `
                               <div>
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="xl:size-6 size-4"
                                       fill="white">
                                       <path
                                           d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                       </path>
                                   </svg>
                               </div>
                               <span class="xl:text-md lg:text-sm text-[9px] text-white font-bold">ثبت سفارش</span>
                       `
         }

         showMessage('open');
         let msgElement = document.createElement('div');
         msgElement.classList =
            "text-sm font-bold flex flex-row items-center justify-center py-3 gap-2 lg:gap-3";
         msgElement.innerHTML = `
                        <span>✅</span>
                        <span>سفارش با موفقیت ثبت شد</span>
                    `;
         message.children[0].appendChild(msgElement);
         setTimeout(() => {
            showMessage('close');
         }, 3000);


      },
      error: function () {
         console.log('error');
         alert('خطا در ثبت سفارش');
      }
   });
}

function openShoppingCart() {
   const container = document.getElementById('cartItemsContainer');
   const empty = document.getElementById('cartEmpty');
   container.innerHTML = ''
   // console.log(product_id)
   // نمایش مودال سبد خرید
   document.getElementById('shoppingCartModal').classList.remove('hidden');
   document.body.classList.add('overflow-hidden');

   // مخفی کردن آیکون سبد خرید تو صفحه اصلی
   orderBasket.parentElement.classList.add('hidden');
   orderBasket.parentElement.classList.remove('flex');

   // گرفتن اطلاعات سبد خرید
   $.ajax({
      url: link + "api/cart/showCarts",
      type: "POST",
      dataType: "json",
      data: {
         'product_id': product_id,
         'user_id': userId
      },
      success: function (data) {
         console.log(data)
         if (data.carts && data.carts.length > 0) {
            empty.classList.add('hidden');
            container.classList.remove('hidden');

            let html = '';
            data.carts.forEach(item => {
               html += `
                                <div class="flex justify-between items-center p-3 border-b border-gray-500 parentCart">
                                    <a href="${link + 'product/show/' + item.product_id}" class="flex items-center gap-3">
                                        <img src="${storage + item.img} " alt='product image' class="size-12 rounded-md">
                                        <div>
                                            <p class="font-bold text-white">${item.product_name}</p>
                                            <p class="text-sm text-gray-300 w-20 lg:w-40 truncate">${item.summary ? item.summary : ''}</p>
                                        </div>
                                    </a>
                                    <div class="flex flex-col items-end gap-2">
                                          <div class="w-32 h-full flex flex-row gap-2 items-center justify-between px-1 count" data-price="${item.price ? item.price : 0}">
                                             <button class="size-7 pt-1 bg-[#f6911e] flex justify-center items-center rounded-md changeButton cursor-pointer" onclick="setCount(this, '+', ${item.product_id}, true)">
                                                <span class="text-2xl text-white">+</span>
                                             </button>
                                             <input type="number" disabled min="1" value="${item.quantity}" class="size-7 text-center font-bold text-xs text-white outline-none" name="" id="">
                                             <button class="size-7 pt-1 bg-[#f6911e] flex justify-center items-center rounded-md changeButton cursor-pointer" onclick="setCount(this, '-', ${item.product_id}, true)">
                                                <span class='text-2xl text-white'>-</span>
                                             </button>
                                          </div>
                                          <span class="text-primary text-gray-300">${item.price ? item.price + ' تومان' : 'برای استعلام قیمت تماس بگیرید'} </span>
                                    </div>
                                </div>
                            `;
            });
            container.innerHTML = html;

            // نمایش قیمت کل
            document.getElementById('cartTotalPrice').textContent = data.total_price || 0;
            document.getElementById('submitOrderBtn').disabled = false;
            document.getElementById('cancelOrderBtn').disabled = false;
            document.getElementById('cancelOrderBtn').classList.remove('cursor-no-drop')
         } else {
            empty.classList.remove('hidden');
            container.classList.add('hidden');
            document.getElementById('submitOrderBtn').disabled = true;
            document.getElementById('cancelOrderBtn').disabled = true;
            document.getElementById('cancelOrderBtn').classList.add('cursor-no-drop')
         }
      },
      error: function () {
         document.getElementById('cartEmpty').classList.remove('hidden');
         document.getElementById('cartEmpty').innerHTML = 'خطا در دریافت اطلاعات';
      }
   });
}

// showMessage
function showMessage(state) {
   if (state == 'open') {
      message.classList.remove('top-0')
      message.classList.remove('opacity-0')
      message.classList.remove('invisible')
      message.classList.add('top-1/10')
   }
   if (state == 'close') {
      message.classList.remove('top-1/10')
      message.classList.add('top-0')
      message.classList.add('opacity-0')
      message.classList.add('invisible')
   }
}