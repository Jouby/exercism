class PascalsTriangle {
  List<List<int>> rows(int rows) {
    var triangle = <List<int>>[];

    for (var row = 1; row <= rows; row++) {
      var list = List.generate(row, (index) => 1);

      for (var cell = 1; cell < row - 1; cell++) {
        list[cell] = triangle[row - 2][cell -1] + triangle[row - 2][cell];
      }
      triangle.add(list);
    }

    return triangle;
  }
}
