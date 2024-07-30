require "csv"
# スクリプトのディレクトリを取得
script_dir = File.dirname(__FILE__)
# 読み込みたいCSVファイルへのパスを作成
csv_path = File.join(script_dir, 'data.csv')

# CSVファイルを読み込む
# name,age,score
data = CSV.read(csv_path, headers: true)
ages = data['age'].map(&:to_i)
scores = data['score'].map(&:to_i)

# 平均年齢を計算
average_age = ages.sum / ages.size.to_f
# 平均スコアを計算
average_score = scores.sum / scores.size.to_f
# スコアが80以上の人数を計算
high_scores_count = scores.count { |score| score >= 80 }

puts "平均年齢: #{average_age.round(2)}"
puts "平均スコア: #{average_score.round(2)}"
puts "スコアが80以上の人数: #{high_scores_count}"
