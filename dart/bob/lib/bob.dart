class Bob {
  bool _checkUppercase(String question) {
    return question == question.toUpperCase() &&
        question.contains(new RegExp(r'[A-Z]'));
  }

  String response(String question) {
    question = question.replaceAll(RegExp(r"\s+"), '');
    if (question.isEmpty) {
      return 'Fine. Be that way!';
    }
    if (question.substring(question.length - 1) == '?') {
      if (_checkUppercase(question))
        return 'Calm down, I know what I\'m doing!';
      else
        return 'Sure.';
    }
    if (_checkUppercase(question)) return 'Whoa, chill out!';

    return 'Whatever.';
  }
}
