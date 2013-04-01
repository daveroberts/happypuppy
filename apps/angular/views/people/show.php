<h1>Showing Person</h1>
<pre><?php print_r($person) ?></pre>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js"></script>
<script type="text/javascript" src="http://code.angularjs.org/1.0.5/angular-resource.min.js"></script>
<script type="text/javascript">
	angular.module('myApp', ['ngResource']);
	function PersonCtrl($scope, $resource, $http) {
		var Person = $resource('/angular/people/:id', {id:'@id'});
		$scope.returnedPerson = "";
		$scope.getPerson = function () {
			var person = Person.get({id:$scope.personID}, function() {
				$scope.returnedPerson = person;
			});
		}
		$scope.getPeople = function () {
			$http.get("/angular/people")
				.success(function(data, status, headers, config) {
					$scope.people = data;
					$scope.status = status;
				}).error(function(data, status, headers, config) {
					$scope.status = status;
			});
		}
		$scope.createPerson = function() {
			var person = new Person({name:$scope.name});
			person.$save();
		}
	}
</script>
<div ng-app="myApp">
	<div ng-controller="PersonCtrl">
		<div>Person ID: <input type="text" ng-model="personID" /></div>
		<button class="btn" ng-click="getPerson()"><i class="icon-plus"></i>Get Person</button>
		<div>Returned Person: {{returnedPerson}}</div>
		<div><button ng-click="getPeople()">Get People</button></div>
		<div>{{status}}</div>
		<div>
			<table ng-show="people.length">
				<thead>
					<tr><th>ID</th><th>Name</th></tr>
				</thead>
				<tbody>
					<tr ng-repeat="person in people">
						<td>{{person.id}}</td><td>{{person.name}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div>
			<div>Name <input type="text" ng-model="name" /></div>
			<div><button ng-click="createPerson()">Create Person</button></div>
		</div>
	</div>
</div>