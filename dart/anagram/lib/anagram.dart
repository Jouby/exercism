class Anagram {
  List<String> findAnagrams(String word, List<String> candidates) {
    return candidates.where((element) => isAnagram(word, element)).toList();
  }

  bool isAnagram(String word, String candidate) {
    word = word.toLowerCase();
    candidate = candidate.toLowerCase();

    if (word == candidate) {
      return false;
    }

    for (var rune in word.runes) {
      var index = candidate.indexOf(String.fromCharCode(rune));
      if (index == -1) {
        return false;
      }

      candidate = candidate.substring(0, index) + candidate.substring(index + 1);
    }

    return candidate == '';
  }
}
