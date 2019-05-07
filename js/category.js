anime({
    loop: false,
    duration: 1000,
    update: function (anim) {
        $('.card').slice(1).css('margin-right', $('.card').first().css('margin-right'));
        $('.card').slice(1).css('margin-left', $('.card').first().css('margin-left'));
    },
    complete: function (anim) {
        $('.ui.link.cards').css('display', 'flex');
        $('.ui.pagination.menu').css('display', 'flex');
        $('.ui.loader').hide();
    }
});

$('.cards .image').dimmer({
    on: 'hover'
});

$('.ui.accordion').accordion({
    duration: 200,
    animateChildren: false
});

$('.ui.dropdown').dropdown();

$(window).on('load resize', function () {
    $('.card').css('margin-right', 'auto');
    $('.card').css('margin-left', 'auto');
    $('.card').slice(1).css('margin-right', $('.card').first().css('margin-right'));
    $('.card').slice(1).css('margin-left', $('.card').first().css('margin-left'));
})

function viewdetails(){
    console.log("loo");
    document.location.href = "../page/details.html";
}


function TaskCtrl_2($scope, $http) {

    $scope.itemPerPage = 6;
    $scope.totalPage = 2;
    $scope.totalItems = 10;
    $scope.currentPage = 1;
    $scope.listPaging =[];
    $scope.posPaging = 1;
    $scope.initData = function(){
        console.log("get in test server");
        $scope.categoryShow = ""
        $http.get("server/category.php").then(function (response) {
            $scope.listTempl = response.data.records;
            $scope.listTemplShow = $scope.listTempl;
            $scope.paging(1,6);
            console.log($scope.listTempl);
        });
    }

    $scope.paging = function(currentPage,itemPerPage){
        $scope.totalItems = $scope.listTempl.length;
        $scope.totalPage =  Math.ceil($scope.totalItems/$scope.itemPerPage);
        for(var i=1;i<=$scope.totalPage;i++){
            $scope.listPaging[i-1] = i;
        }
        $scope.listTemplShow = $scope.listTempl.slice((currentPage-1)*itemPerPage,currentPage*itemPerPage);
    }
    $scope.initData();


    $scope.pagingtoPage = function(page){
        $scope.listTemplShow = $scope.listTempl.slice((page-1)*$scope.itemPerPage,page*$scope.itemPerPage);
        $scope.currentPage = page;
        $scope.posPaging = page;
    }


    $scope.chooseCategory = function(status){
        switch(status){
            case 0:
                $scope.listTemplShow = $scope.listTempl.filter(function (el) {
                    return el.category=="0";
                });
                $scope.categoryShow = "Category 0"
                break;
            case 1:
                $scope.listTemplShow = $scope.listTempl.filter(function (el) {
                    return el.category=="1";
                });
                $scope.categoryShow = "Category 1"
                break;
        }

    } 

    $scope.changeSearch = function(){
    }

}