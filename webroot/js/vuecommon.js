var bgchg = new Vue({
  el: '#bgchg_with_vue',
  data: {
    isBgBlue: false
  }
})


var scval = new Vue({
    el: '#scval',
    data: {
      scrollY: 0
    },
    mounted() {
      window.addEventListener('scroll', this.handleScroll);
    },
    methods: {
      handleScroll() {
          this.scrollY = window.scrollY;
          var url = location.href ;
          if(url.includes('/work') || url.includes('/result') || url.includes('/fromrep') || url.includes('/companyinfo')){
            var scrollchgcval = 400;
          }else{
            var scrollchgcval = 700;
          }

          if(window.scrollY < scrollchgcval){
            bgchg.isBgBlue = false
          }
          if(window.scrollY > scrollchgcval){
            bgchg.isBgBlue = true
          }
        } 
      }
})

