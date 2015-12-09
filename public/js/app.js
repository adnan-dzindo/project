(function(){
	var app = angular.module('gemStore', [])
	.config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
})

	app.controller('StoreController', function(){
		this.products = gems;
		this.author = author;

	});




	var gems = 
	[
		{
			name: 'Naziv gema',
			price: 2.95,
			description: 'Opis proizvoda',
			canPursche: false,
			soldOut: false,
		},
		{
			name: 'Gem naziv dva',
			price: 7.32,
			description: 'Opis gema dva proizvoda',
			canPursche: false,
			soldOut: true,
		},
		{
			name: 'Gem naziv tri',
			price: 17.81,
			description: 'Opis gema tri proizvoda',
			canPursche: true,
			soldOut: false,
		},
		{
			name: 'Gem naziv cetri',
			price: 112.94,
			description: 'Opis gema cetri proizvoda',
			canPursche: true,
			soldOut: true,
		}
	];

	var author =
	{
		name: 'Adnan',
		lastname: 'Džindo',
		active: false,
	}


})();