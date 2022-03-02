class WordCount {
  Map<String, int> countWords(String str) {
    var exp = RegExp(r"(\w+('\w+)?)");
    return exp.allMatches(str)
        .map((m) => m.group(0)!.toLowerCase())
        .fold(Map<String, int>(), (Map<String, int> counts, String word) {
          counts[word] = (counts[word] ?? 0) + 1;
          return counts;
        });
  }
}