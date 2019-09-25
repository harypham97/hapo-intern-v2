var app = new Vue({
    el: '#vue-app',
    data: {
        name:'',
        age:'',
        message: 'Hello Vue!',
        abc: 'bac',
        img1:'https://static.independent.co.uk/s3fs-public/thumbnails/image/2018/08/13/14/paris-summer.jpg?w968h681',
        img2:'https://images.france.fr/zeaejvyq9bhj/5QsvRnijLyI2SacuII8mcO/94de7994698fa0baf56366b62fa4b7ff/183-18_cmjn_ouverture.jpg?w=1120&h=490&q=70&fl=progressive&fit=fill',
    },
    methods: {
        greeting: function () {
            return 'abc bla bla ';
        },
        showAlert:function () {
            alert('fuck ya');
        }
    }
});