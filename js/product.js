function viewdetails(){
	document.location.href = "../page/details.html";
}

function TaskCtrl_2($scope, $http) {
	// console.log("lol");
	// $scope.listPrd = [0,1,2,3,4,5];

	$scope.initData = function(){
        $scope.get8mostfavorite();
        $scope.get8latesthtml();
        $scope.get8latestppt();
        $scope.checkSession();
    }

    $scope.checkSession =function(){
        $http.get("server/checksession.php").then(function (response) {
            $scope.thisUser = response.data;
            console.log("session: ",$scope.thisUser);
        });
    }

    $scope.get8mostfavorite =function(){
    	$http.get("server/mostfavorite.php").then(function (response) {
            $scope.listTemplMostFavorite = response.data.records;
            // $scope.listTemplShow = $scope.listTempl;
            // console.log($scope.listTemlMostFavorite);
        });
    }

    $scope.get8latesthtml =function(){
    	$http.get("server/latesthtml.php").then(function (response) {
            $scope.listTemplLatestHtml = response.data.records;
            // $scope.listTemplShow = $scope.listTempl;
            // console.log($scope.listTemlMostFavorite);
        });
    }

    $scope.get8latestppt =function(){
    	$http.get("server/latestpp.php").then(function (response) {
            $scope.listTemplLatestPpt = response.data.records;
            // $scope.listTemplShow = $scope.listTempl;
            // console.log($scope.listTemlMostFavorite);
        });
    }
    $scope.initData();

    $scope.viewdetails = function(id){
    	document.location.href = "../page/details.html?id=" + id;

    }
    $scope.download = function(item){
        if($scope.thisUser==""){
            alert("Not yet login");
        }
        else{
            console.log(item);
            var zip_file_path = "../templates/" + item.url
            var zip_file_name = item.name //put inside "" file name or something
            var a = document.createElement("a");
            document.body.appendChild(a);
            a.style = "display: none";
            a.href = zip_file_path;
            a.download = zip_file_name;
            a.click();
            document.body.removeChild(a);
        }
        
    }
}