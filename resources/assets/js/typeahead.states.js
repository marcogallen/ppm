/*TypeAhead structurer*/
var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

var states = ['Aguascalientes',
'Baja California',
'Baja California Sur',
'Campeche',
'Coahuila de Zaragoza',
'Colima',
'Chiapas',
'Chihuahua',
'Distrito Federal',
'Durango',
'Estado de México',
'Guanajuato',
'Guerrero',
'Hidalgo',
'Jalisco',
'Michoacán',
'Morelos',
'Nayarit',
'Nuevo León',
'Oaxaca',
'Puebla',
'Querétaro',
'Quintana Roo',
'San Luis Potosí',
'Sinaloa',
'Sonora',
'Tabasco',
'Tamaulipas',
'Tlaxcala',
'Veracruz',
'Yucatán',
'Zacatecas'
];

