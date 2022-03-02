class Raindrops {
  String convert(int number) {
    var string = '';
    if (number % 3 == 0) {
      string += 'Pling';
    }
    if (number % 5 == 0) {
      string += 'Plang';
    }
    if (number % 7 == 0) {
      string += 'Plong';
    }

    return string != '' ? string : number.toString();
  }
}
