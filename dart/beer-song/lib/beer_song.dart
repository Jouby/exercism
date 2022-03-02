class BeerSong {
  List<String> recite(int start, int length) {
    var song = <String>[];

    for (var number = start; number > start - length; number--) {
      if (number != start) {
        song.add('');
      }
      song += reciteOne(number);
    }

    return song;
  }

  List<String> reciteOne(int number) {
    return [
      "${capitalize(getBottleText(number))} of beer on the wall, ${getBottleText(number)} of beer.",
      "${getLastSentence(number)}, ${getBottleText(nextNumber(number))} of beer on the wall.",
    ];
  }

  String capitalize(String string) {
    return "${string[0].toUpperCase()}${string.substring(1)}";
  }

  int nextNumber(int number) {
    return (number == 0) ? 99 : number - 1;
  }

  String getLastSentence(int number) {
    return (number == 0)
        ? 'Go to the store and buy some more'
        : "Take ${(number == 1) ? "it" : "one"} down and pass it around";
  }

  String getBottleText(int number) {
    return (number == 0)
        ? 'no more bottles'
        : (number == 1)
            ? '1 bottle'
            : "$number bottles";
  }
}
