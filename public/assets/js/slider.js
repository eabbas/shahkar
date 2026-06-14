// اسلایدر مهدی بندعلی
let FOR_HER = document.getElementById('FOR_HER')
let FOR_HIM = document.getElementById('FOR_HIM')

function border_chaleng(params) {
   if (params == 'her') {
      console.log('sgdfl')
      if (FOR_HER.classList.contains('hover:border-b-1')) {
         FOR_HER.classList.remove('hover:border-b-1')
         FOR_HER.classList.add('border-b-1')
         FOR_HER.classList.add('hover:border-b-0')
         FOR_HER.classList.add('hover:border-t-1')
         FOR_HIM.classList.remove('border-b-1')
         FOR_HIM.classList.remove('hover:border-b-0')
         FOR_HIM.classList.remove('hover:border-t-1')
         FOR_HIM.classList.add('hover:border-b-1')
      }
   }
   if (params == 'him') {
      console.log('sgdfl')
      if (FOR_HIM.classList.contains('hover:border-b-1')) {
         FOR_HIM.classList.remove('hover:border-b-1')
         FOR_HIM.classList.add('border-b-1')
         FOR_HIM.classList.add('hover:border-b-0')
         FOR_HIM.classList.add('hover:border-t-1')
         FOR_HER.classList.remove('border-b-1')
         FOR_HER.classList.remove('hover:border-b-0')
         FOR_HER.classList.remove('hover:border-t-1')
         FOR_HER.classList.add('hover:border-b-1')
      }
   }
}