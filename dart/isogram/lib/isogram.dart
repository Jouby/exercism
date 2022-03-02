class Isogram {
  bool isIsogram(String word) {
    word = word.toLowerCase().replaceAll(RegExp(r"-|\s+"), '');
    return word.runes.toSet().toList().length == word.runes.length;
  }
}
