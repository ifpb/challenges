require_relative "../../src/RainbowTable/rainbow_table"

describe RainbowTable do
  describe ".cracker" do
    context "show the secret password from hash 0cc175b9c0f1b6a831c399e269772661" do
      hash = "0cc175b9c0f1b6a831c399e269772661"
      rainbow_table = RainbowTable.new(1)
      it "return 'a' from hash 0cc175b9c0f1b6a831c399e269772661" do
        expect(rainbow_table.cracker(hash)).to eq("a")
      end
    end

      context "show the secret password from hash 534b9a3588bdd87bf7c3b9d650e43e46" do
      hash = "534b9a3588bdd87bf7c3b9d650e43e46"
      rainbow_table = RainbowTable.new(2)
      it "return 'pu' from hash 534b9a3588bdd87bf7c3b9d650e43e46" do
        expect(rainbow_table.cracker(hash)).to eq("pu")
      end
    end

  end
end  