class ResistorColorDuo {
  List<String> colors = [
    'black',
    'brown',
    'red',
    'orange',
    'yellow',
    'green',
    'blue',
    'violet',
    'grey',
    'white',
  ];

  int _colorCode(String color) {
    return colors.indexOf(color);
  }

  int value(List<String> colors) {
    return int.parse(colors.sublist(0, 2).map((color) => _colorCode(color)).join());
  }
}
