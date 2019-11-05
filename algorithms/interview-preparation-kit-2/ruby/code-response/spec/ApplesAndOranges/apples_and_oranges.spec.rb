require_relative "../../src/ApplesAndOranges/apples_and_oranges"

describe ApplesAndOranges do
  describe ".contar" do
    context "5, 10, 0, 15, [0, 3, 6], [17, 20]" do
      it "return [1, 0]" do
        expect(ApplesAndOranges.count(5, 10, 0, 15, [0, 3, 6], [17, 20])).to eql([1, 0])
      end
    end

    context "7, 11, 5, 15, [-2, 2, 1], [5, -6]" do
      it "return [1, 1]" do
        expect(ApplesAndOranges.count(7, 11, 5, 15, [-2, 2, 1], [5, -6])).to eql([1, 1])
      end
    end

    context "8, 9, -1, 15, [-2, 2, 10], [20, 21]" do
      it "return [1, 0]" do
        expect(ApplesAndOranges.count(8, 9, -1, 15, [-2, 2, 10], [20, 21])).to eql([1, 0])
      end
    end
  end
end
