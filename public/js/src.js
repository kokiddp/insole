require('angular');

(function( $ ) {
	'use strict';

	/**
	 * On DOM ready:
	 */
	$(function() {	
		console.log('Insole EB HiTech by Gabriele Coquillard @ VisaMultimedia');	
	});

	/**
	 * Angular spapp:
	 */
    var app = angular.module('insole',[]);
    
    app.config(['$compileProvider', function($compileProvider) {
        $compileProvider.debugInfoEnabled(false);
        $compileProvider.commentDirectivesEnabled(false);
        $compileProvider.cssClassDirectivesEnabled(false);
    }]);

    app.controller('insoleController',[
        "$scope",
        "$http",
        "$httpParamSerializerJQLike",
        "$window",
        function($scope,$http,$httpParamSerializerJQLike,$window) {
            
	}]);

})( jQuery );