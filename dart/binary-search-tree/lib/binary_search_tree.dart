class BinarySearchTree {
  late Node root;

  List<String> sortedData = [];

  BinarySearchTree(String value) {
    root = new Node(data: value);
    sortedData.add(value);
  }

  /// Insert new value
  void insert(String value) {
    /// Insert new value in tree
    _checkNodeToInsert(root, int.parse(value));

    /// Update sorted data list
    sortedData.clear();
    _updateSortedData(root);
  }

  void _checkNodeToInsert(Node node, int value) {
    if (value <= int.parse(node.data)) {
      if (node.left != null) {
        _checkNodeToInsert(node.left!, value);
      } else {
        node.left = Node(data: value.toString());
      }
    } else {
      if (node.right != null) {
        _checkNodeToInsert(node.right!, value);
      } else {
        node.right = Node(data: value.toString());
      }
    }
  }

  void _updateSortedData(Node node) {
    if (node.left != null) {
      _updateSortedData(node.left!);
    }
    sortedData.add(node.data);
    if (node.right != null) {
      _updateSortedData(node.right!);
    }
  }
}

class Node {
  String data;
  Node? left;
  Node? right;

  Node({required this.data, this.left, this.right});
}
